@extends('master')

@section('content')
<div class="page-header">
    <h2>Novo Cliente</h2>
    <a href="{{ route('clientes.index') }}" class="btn btn-primary">← Voltar</a>
</div>

<div class="card">
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome completo" required>
            @error('name')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="email@exemplo.com" required>
            @error('email')<small style="color:#dc3545">{{ $message }}</small>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Criar Cliente</button>
    </form>
</div>
@endsection
