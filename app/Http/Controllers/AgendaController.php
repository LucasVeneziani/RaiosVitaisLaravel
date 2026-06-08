<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Cliente;
use App\Models\Funcionario;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        return view('agenda');
    }

    public function create()
    {
        $clientes = Cliente::all();
        $funcionarios = Funcionario::all();
        return view('agenda-create', ['clientes' => $clientes, 'funcionarios' => $funcionarios]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'funcionario_id' => 'required|exists:funcionarios,id',
            'data_agendamento' => 'required|date_format:Y-m-d\TH:i|after_or_equal:now',
            'data_expiracao' => 'required|date_format:Y-m-d\TH:i|after_or_equal:now|after:data_agendamento',
        ]);

        $created = Agenda::create([
            'cliente_id' => $request->input('cliente_id'),
            'funcionario_id' => $request->input('funcionario_id'),
            'data_agendamento' => $request->input('data_agendamento'),
            'data_expiracao' => $request->input('data_expiracao'),
        ]);

        if ($created) {
            return redirect()->route('agenda.index')->with('message', 'Agendamento criado com sucesso.');
        }
        return redirect()->back()->with('error', 'Falha ao criar agendamento.');
    }

    public function edit(Agenda $agenda)
    {
        $clientes = Cliente::all();
        $funcionarios = Funcionario::all();
        return view('agenda-edit', ['agenda' => $agenda, 'clientes' => $clientes, 'funcionarios' => $funcionarios]);
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'funcionario_id' => 'required|exists:funcionarios,id',
            'data_agendamento' => 'required|date_format:Y-m-d\TH:i|after_or_equal:now',
            'data_expiracao' => 'required|date_format:Y-m-d\TH:i|after_or_equal:now|after:data_agendamento',
        ]);

        $updated = $agenda->update([
            'cliente_id' => $request->input('cliente_id'),
            'funcionario_id' => $request->input('funcionario_id'),
            'data_agendamento' => $request->input('data_agendamento'),
            'data_expiracao' => $request->input('data_expiracao'),
        ]);

        if ($updated) {
            return redirect()->route('agenda.index')->with('message', 'Agendamento atualizado com sucesso.');
        }
        return redirect()->back()->with('error', 'Erro ao atualizar agendamento.');
    }

    public function events(Request $request)
    {
        $agendas = Agenda::with(['funcionario', 'cliente'])
            ->where('data_expiracao', '>=', Carbon::now())
            ->get();

        $events = $agendas->map(function (Agenda $agenda) {
            $funcionarioNome = $agenda->funcionario?->name ?? 'Funcionário';
            $clienteNome = $agenda->cliente?->name ?? 'Cliente';

            return [
                'id' => $agenda->id,
                'title' => "{$funcionarioNome} - {$clienteNome}",
                'start' => $agenda->data_agendamento?->format('Y-m-d\TH:i:s'),
                'end' => $agenda->data_expiracao?->format('Y-m-d\TH:i:s'),
                'extendedProps' => [
                    'funcionario' => $funcionarioNome,
                    'cliente' => $clienteNome,
                    'descricao' => "Consulta de {$clienteNome} com {$funcionarioNome}",
                ],
            ];
        });

        return response()->json($events);
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('agenda.index')->with('message', 'Agendamento deletado com sucesso.');
    }
}
