@extends('master')

@section('content')
<div class="page-header">
    <h2>Editar Usuário</h2>
    <a href="{{ route('users.index') }}" class="btn btn-primary">← Voltar</a>
</div>

<div class="card">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
            @error('name')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
            @error('email')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <button type="submit" class="btn btn-warning">Salvar Alterações</button>
    </form>
</div>
@endsection
