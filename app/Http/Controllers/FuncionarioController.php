<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Hash;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios', ['funcionarios' => $funcionarios]);
    }

    public function create()
    {
        return view('funcionarios_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:funcionarios,email',
            'password' => 'required|string|min:6|confirmed',
            'phone'    => 'nullable|string|max:20',
            'cargo'    => 'required|string|max:255',
        ]);

        $data = $request->only(['name', 'email', 'phone', 'cargo']);
        $data['password'] = Hash::make($request->password);

        $created = Funcionario::create($data);

        if ($created) {
            return redirect()->route('funcionarios.index')->with('message', 'Funcionário criado com sucesso.');
        }
        return redirect()->back()->with('error', 'Falha ao criar funcionário.');
    }

    public function show(Funcionario $funcionario)
    {
        return view('funcionarios_edit', ['funcionario' => $funcionario]);
    }

    public function edit(Funcionario $funcionario)
    {
        return view('funcionarios_edit', ['funcionario' => $funcionario]);
    }

    public function update(Request $request, Funcionario $funcionario)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:funcionarios,email,' . $funcionario->id,
            'password' => 'nullable|string|min:6|confirmed',
            'phone'    => 'nullable|string|max:20',
            'cargo'    => 'required|string|max:255',
        ]);

        $data = $request->only(['name', 'email', 'phone', 'cargo']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $updated = $funcionario->update($data);

        if ($updated) {
            return redirect()->route('funcionarios.index')->with('message', 'Funcionário atualizado com sucesso.');
        }
        return redirect()->back()->with('error', 'Erro ao atualizar funcionário.');
    }

    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect()->route('funcionarios.index')->with('message', 'Funcionário deletado com sucesso.');
    }
}
