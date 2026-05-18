<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <title>Raios Vitais</title>
</head>
<body>
    @if(session()->has('auth_id'))
    <nav>
        <a href="{{ route('home') }}" class="brand">Raios Vitais</a>
        <ul>
            <li><a href="{{ route('users.index') }}">Usuários</a></li>
            @if(session('auth_role') === 'admin')
            <li><a href="{{ route('funcionarios.index') }}">Funcionários</a></li>
            @endif
        </ul>
        <div class="nav-right">
            <span class="nav-role {{ session('auth_role') }}">
                {{ session('auth_role') === 'admin' ? 'Admin' : 'Funcionário' }}
            </span>
            <span class="name">{{ session('auth_name') }}</span>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit">Sair</button>
            </form>
        </div>
    </nav>
    @endif
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>
