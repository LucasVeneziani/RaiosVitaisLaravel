@extends('master')

@section('content')
<div class="page-header">
    <h2>Usuários</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary">+ Novo Usuário</a>
</div>

@if($users->isEmpty())
    <div class="card"><p style="color:#777">Nenhum usuário cadastrado.</p></div>
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
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email ?? '—' }}</td>
            <td>{{ $user->created_at ? $user->created_at->format('d/m/Y') : '—' }}</td>
            <td style="display:flex;gap:8px;align-items:center">
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                      onsubmit="return confirm('Tem certeza que deseja deletar este usuário?')">
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
