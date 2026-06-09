<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PainelAdminController extends Controller
{
    public function index()
    {
        $hoje = Agenda::with(['cliente', 'funcionario'])
            ->whereDate('data_agendamento', Carbon::today())
            ->orderBy('data_agendamento')
            ->get();

        $semana = Agenda::with(['cliente', 'funcionario'])
            ->whereBetween('data_agendamento', [
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek(),
            ])
            ->orderBy('data_agendamento')
            ->get();

        $mes = Agenda::with(['cliente', 'funcionario'])
            ->whereYear('data_agendamento', Carbon::now()->year)
            ->whereMonth('data_agendamento', Carbon::now()->month)
            ->orderBy('data_agendamento')
            ->get();

        return view('paineladmin', compact('hoje', 'semana', 'mes'));
    }
}
