@extends('master')

@section('content')

@if(session()->has('auth_id'))

<style>
    .painel-tabs {
        display: flex;
        gap: 0.5rem;
        margin-bottom: 1.25rem;
    }
    .tab-btn {
        padding: 6px 14px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        font-size: 0.85rem;
        font-weight: bold;
        transition: opacity 0.2s;
    }
    .tab-btn.active {
        background: #ff6cc7;
        color: #fff;
    }
    .tab-btn.inactive {
        background: #fff;
        color: #ff6cc7;
        border: 1.5px solid #ff6cc7;
    }
    .tab-btn.inactive:hover {
        opacity: 0.75;
    }
    .welcome-block {
        margin-bottom: 1.5rem;
    }
    .welcome-block h2 {
        margin-bottom: 0.15rem;
    }
    .welcome-block p {
        color: #888;
        margin: 0;
        font-size: 0.9rem;
    }
</style>

<div class="welcome-block">
    <h2>Bem-vindo, {{ session('auth_name') }}!</h2>
    <p>{{ now()->translatedFormat('l, d \d\e F \d\e Y') }}</p>
</div>

<div class="painel-tabs">
    <button class="tab-btn active"  id="tab-hoje"   onclick="showTab('hoje')">Consultas de Hoje</button>
    <button class="tab-btn inactive" id="tab-semana" onclick="showTab('semana')">Consultas da Semana</button>
    <button class="tab-btn inactive" id="tab-mes"    onclick="showTab('mes')">Consultas do Mês</button>
</div>

{{-- Tabela: Hoje --}}
<div id="painel-hoje">
    @if($hoje->isEmpty())
        <div class="card"><p style="color:#777;">Nenhuma consulta sua agendada para hoje.</p></div>
    @else
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Horário</th>
                    <th>Término</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hoje as $agendamento)
                <tr>
                    <td>{{ $agendamento->id }}</td>
                    <td>{{ $agendamento->cliente->name ?? '—' }}</td>
                    <td>{{ $agendamento->data_agendamento->format('H:i') }}</td>
                    <td>{{ $agendamento->data_expiracao ? $agendamento->data_expiracao->format('H:i') : '—' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

{{-- Tabela: Semana --}}
<div id="painel-semana" style="display:none;">
    @if($semana->isEmpty())
        <div class="card"><p style="color:#777;">Nenhuma consulta sua agendada para esta semana.</p></div>
    @else
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Término</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semana as $agendamento)
                <tr>
                    <td>{{ $agendamento->id }}</td>
                    <td>{{ $agendamento->cliente->name ?? '—' }}</td>
                    <td>{{ $agendamento->data_agendamento->format('d/m/Y') }}</td>
                    <td>{{ $agendamento->data_agendamento->format('H:i') }}</td>
                    <td>{{ $agendamento->data_expiracao ? $agendamento->data_expiracao->format('H:i') : '—' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

{{-- Tabela: Mês --}}
<div id="painel-mes" style="display:none;">
    @if($mes->isEmpty())
        <div class="card"><p style="color:#777;">Nenhuma consulta sua agendada para este mês.</p></div>
    @else
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Término</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mes as $agendamento)
                <tr>
                    <td>{{ $agendamento->id }}</td>
                    <td>{{ $agendamento->cliente->name ?? '—' }}</td>
                    <td>{{ $agendamento->data_agendamento->format('d/m/Y') }}</td>
                    <td>{{ $agendamento->data_agendamento->format('H:i') }}</td>
                    <td>{{ $agendamento->data_expiracao ? $agendamento->data_expiracao->format('H:i') : '—' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<script>
    function showTab(tab) {
        document.getElementById('painel-hoje').style.display   = tab === 'hoje'   ? '' : 'none';
        document.getElementById('painel-semana').style.display = tab === 'semana' ? '' : 'none';
        document.getElementById('painel-mes').style.display    = tab === 'mes'    ? '' : 'none';
        document.getElementById('tab-hoje').className   = 'tab-btn ' + (tab === 'hoje'   ? 'active' : 'inactive');
        document.getElementById('tab-semana').className = 'tab-btn ' + (tab === 'semana' ? 'active' : 'inactive');
        document.getElementById('tab-mes').className    = 'tab-btn ' + (tab === 'mes'    ? 'active' : 'inactive');
    }
</script>

@else
    <meta http-equiv="refresh" content="0;url={{ route('home') }}">
@endif

@endsection
