@extends('master')

@section('content')
<div class="page-header">
    <h2>Clientes</h2>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">+ Novo Cliente</a>
</div>

@if($clientes->isEmpty())
    <div class="card"><p style="color:#777">Nenhum cliente cadastrado.</p></div>
@else
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->name }}</td>
            <td>{{ $cliente->email ?? '—' }}</td>
            <td>{{ $cliente->created_at ? $cliente->created_at->format('d/m/Y') : '—' }}</td>
            <td style="display:flex;gap:8px;align-items:center">
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST"
                      onsubmit="return confirm('Tem certeza que deseja deletar este cliente?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
