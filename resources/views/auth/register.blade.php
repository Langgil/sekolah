@extends('layouts.app')

@section('content')
<style>
    .register-container {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 0;
    }

    .register-card {
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        padding: 40px;
        max-width: 500px;
        width: 100%;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .btn-register {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        transition: all 0.3s ease;
    }

    .btn-register:hover {
        transform: translateY(-3px);
        box-shadow: 0 7px 14px rgba(0,0,0,0.15);
    }
</style>

<div class="register-container">
    <div class="register-card">
        <h2 class="text-center mb-4">Pendaftaran Siswa Baru</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.submit') }}">
            @csrf
            
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <label for="jurusan">Pilih Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="tkj" {{ old('jurusan') == 'tkj' ? 'selected' : '' }}>Teknik Komputer & Jaringan</option>
                    <option value="teknik_mesin" {{ old('jurusan') == 'teknik_mesin' ? 'selected' : '' }}>Teknik Mesin</option>
                    <option value="akuntansi" {{ old('jurusan') == 'akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor Handphone</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
            </div>

            <button type="submit" class="btn btn-register btn-block">Daftar Sekarang</button>
        </form>

        <div class="text-center mt-3">
            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
        </div>
    </div>
</div>
@endsection