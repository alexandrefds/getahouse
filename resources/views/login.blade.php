@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')
    <body class='login-page'>

        <div class='login-card'>
            <form>
                <!-- Campo de E-mail -->
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                </div>

                           <!-- Campo de Senha -->
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
            </div>

            <!-- Botão de Login -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>

            <!-- Link para Recuperar Senha -->
            <div class="text-center mt-3">
                <a href="#" class="text-decoration-none">Esqueceu sua senha?</a>
            </div>

            </form>

        </div>

    </body>
</div>
@endsection
