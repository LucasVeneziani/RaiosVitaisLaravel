@extends('master')

@section('content')
<div class="page-header">
    <h2>Editar Agendamento</h2>
    <a href="{{ route('agenda.index') }}" class="btn btn-primary">← Voltar</a>
</div>

<style>
    select {
        font-size: larger;
    }
</style>

<div class="card">
    <form action="{{ route('agenda.update', $agenda->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Cliente</label>
            <select name="cliente_id" required>
                <option value="">Selecione um cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ old('cliente_id', $agenda->cliente_id) == $cliente->id ? 'selected' : '' }}>
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
                    <option value="{{ $funcionario->id }}" {{ old('funcionario_id', $agenda->funcionario_id) == $funcionario->id ? 'selected' : '' }}>
                        {{ $funcionario->name }}
                    </option>
                @endforeach
            </select>
            @error('funcionario_id')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Data e Hora do Agendamento</label>
            <input type="datetime-local" name="data_agendamento" value="{{ old('data_agendamento', $agenda->data_agendamento->format('Y-m-d\TH:i')) }}" required>
            @error('data_agendamento')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Data de Expiração</label>
            <input type="datetime-local" name="data_expiracao" value="{{ old('data_expiracao', $agenda->data_expiracao->format('Y-m-d\TH:i')) }}" required>
            @error('data_expiracao')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <button type="submit" class="btn btn-warning">Salvar Alterações</button>
    </form>

    <div>
        <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja deletar este agendamento?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar Agendamento</button>
        </form>
    </div>
</div>
@endsection
