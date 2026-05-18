<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>Login — Raios Vitais</title>

</head>
<body>
    <div class="login-box">
        <h1> Raios Vitais</h1>
        <p class="sub">Painel Administrativo</p>

        @if(session('error'))
            <div class="alert-error">{{ session('error') }}</div>
        @endif
        @if(session('message'))
            <div class="alert-success">{{ session('message') }}</div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       placeholder="admin@exemplo.com" required>
                @error('email')
                    <small style="color:#dc3545">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password"
                       placeholder="••••••••" required>
                @error('password')
                    <small style="color:#dc3545">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn-login">Entrar</button>
        </form>
    </div>
</body>
</html>
