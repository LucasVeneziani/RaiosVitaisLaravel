@extends('master')

@section('content')
<div class="page-header">
    <h2>Editar Funcionário</h2>
    <a href="{{ route('funcionarios.index') }}" class="btn btn-primary">← Voltar</a>
</div>

<div class="card">
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" value="{{ old('name', $funcionario->name) }}" required>
            @error('name')<small>{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" value="{{ old('email', $funcionario->email) }}" required>
            @error('email')<small>{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Nova Senha <span class="form-hint">(deixe em branco para não alterar)</span></label>
            <input type="password" name="password" placeholder="Mínimo 6 caracteres">
            @error('password')<small>{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Confirmar Nova Senha</label>
            <input type="password" name="password_confirmation" placeholder="Repita a nova senha">
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" value="{{ old('phone', $funcionario->phone) }}">
            @error('phone')<small>{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Cargo</label>
            <input type="text" name="cargo" value="{{ old('cargo', $funcionario->cargo) }}" required>
            @error('cargo')<small>{{ $message }}</small>@enderror
        </div>
        <button type="submit" class="btn btn-warning">Salvar Alterações</button>
    </form>
</div>
@endsection
