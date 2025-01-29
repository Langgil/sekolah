@extends('layouts.app')

@section('content')
<style>
    .login-container {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 0;
    }

    .login-card {
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        padding: 40px;
        max-width: 450px;
        width: 100%;
    }

    .login-logo {
        width: 100px;
        height: 100px;
        margin: 0 auto 30px;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 48px;
    }

    .btn-login {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        transition: all 0.3s ease;
    }

    .btn-login:hover {
        transform: translateY(-3px);
        box-shadow: 0 7px 14px rgba(0,0,0,0.15);
    }

    .forgot-password {
        color: #6a11cb;
        transition: color 0.3s ease;
    }

    .forgot-password:hover {
        color: #2575fc;
        text-decoration: none;
    }
</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-logo">
            <i class="fas fa-user-lock"></i>
        </div>

        <h2 class="text-center mb-4">Login Siswa</h2>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            
            <div class="form-group mb-3">
                <label for="email">Alamat Email</label>
                <input type="email" 
                       class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                       id="email" 
                       name="email" 
                       value="{{ old('email') }}" 
                       required 
                       autofocus>
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" 
                       class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" 
                       id="password" 
                       name="password" 
                       required>
            </div>

            <div class="form-group mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" 
                           class="custom-control-input" 
                           id="remember" 
                           name="remember">
                    <label class="custom-control-label" for="remember">
                        Ingat Saya
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-login btn-block w-100">
                Login
            </button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('forgot.password') }}" class="forgot-password">
                Lupa Password?
            </a>
        </div>

        <div class="text-center mt-3">
            Belum punya akun? 
            <a href="{{ route('register') }}">Daftar di sini</a>
        </div>
    </div>
</div>
@endsection