@extends('master')

@section('content')
<div class="page-header">
    <h2>Novo Funcionário</h2>
    <a href="{{ route('funcionarios.index') }}" class="btn btn-primary">← Voltar</a>
</div>

<div class="card">
    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome completo" required>
            @error('name')<small>{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="email@exemplo.com" required>
            @error('email')<small>{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" placeholder="Mínimo 6 caracteres" required>
            @error('password')<small>{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Confirmar Senha</label>
            <input type="password" name="password_confirmation" placeholder="Repita a senha" required>
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="(11) 99999-9999">
            @error('phone')<small>{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>Cargo</label>
            <input type="text" name="cargo" value="{{ old('cargo') }}" placeholder="Ex: Analista, Gerente..." required>
            @error('cargo')<small>{{ $message }}</small>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Criar Funcionário</button>
    </form>
</div>
@endsection
