@extends('master')

@section('content')
<div class="page-header">
    <h2>Novo Agendamento</h2>
    <a href="{{ route('agenda.index') }}" class="btn btn-primary">← Voltar</a>
</div>

<style>
    select {
        font-size: larger;
    }
</style>

<div class="card">
    <form action="{{ route('agenda.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Cliente</label>
            <select name="cliente_id" required>
                <option value="">Selecione um cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->name }}
                    </option>
                @endforeach
            </select>
            @error('cliente_id')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Funcionário</label>
            <select name="funcionario_id" required>
                <option value="">Selecione um funcionário</option>
                @foreach($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}" {{ old('funcionario_id') == $funcionario->id ? 'selected' : '' }}>
                        {{ $funcionario->name }}
                    </option>
                @endforeach
            </select>
            @error('funcionario_id')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Data e Hora do Agendamento</label>
            <input type="datetime-local" name="data_agendamento" value="{{ old('data_agendamento') }}" min="{{ now()->format('Y-m-d\TH:i') }}" required>
            @error('data_agendamento')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Data de Expiração</label>
            <input type="datetime-local" name="data_expiracao" value="{{ old('data_expiracao') }}" min="{{ now()->format('Y-m-d\TH:i') }}" required>
            @error('data_expiracao')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Criar Agendamento</button>
    </form>
</div>
@endsection
