@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center">Pendaftaran Siswa Baru</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pendaftaran.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" required>
            @error('telepon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required></textarea>
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" required>
                <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Pengembangan Perangkat Lunak & Gim">Pengembangan Perangkat Lunak & Gim</option>
                <option value="Teknik Body Otomotif">Teknik Body Otomotif</option>
                <option value="Teknik Electro">Teknik Elektro</option>
                <option value="Tata Busana">Tata Busana</option>
                <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                <option value="Desain Komunikasi Visual">DKV</option>
            </select>
            @error('jurusan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>
@endsection
