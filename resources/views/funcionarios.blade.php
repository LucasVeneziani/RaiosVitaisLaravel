@extends('master')

@section('content')
<div class="page-header">
    <h2>Funcionários</h2>
    <a href="{{ route('funcionarios.create') }}" class="btn btn-primary">+ Novo Funcionário</a>
</div>

@if($funcionarios->isEmpty())
    <div class="card"><p style="color:#777">Nenhum funcionário cadastrado.</p></div>
@else
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Cargo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($funcionarios as $func)
        <tr>
            <td>{{ $func->id }}</td>
            <td>{{ $func->name }}</td>
            <td>{{ $func->email }}</td>
            <td>{{ $func->phone ?? '—' }}</td>
            <td>{{ $func->cargo }}</td>
            <td style="display:flex;gap:8px;align-items:center">
                <a href="{{ route('funcionarios.edit', $func->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('funcionarios.destroy', $func->id) }}" method="POST"
                      onsubmit="return confirm('Tem certeza que deseja deletar este funcionário?')">
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
