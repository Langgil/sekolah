@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center">Detail Siswa</h2>
    
    <div class="card">
        <div class="card-header">
            <h3>{{ $student->name }}</h3>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Nama:</dt>
                <dd class="col-sm-9">{{ $student->name }}</dd>

                <dt class="col-sm-3">Kelas:</dt>
                <dd class="col-sm-9">{{ $student->class }}</dd>

                <dt class="col-sm-3">ID Siswa:</dt>
                <dd class="col-sm-9">{{ $student->student_id }}</dd>

                <dt class="col-sm-3">Alamat:</dt>
                <dd class="col-sm-9">{{ $student->address }}</dd>

                <dt class="col-sm-3">Nomor Telepon:</dt>
                <dd class="col-sm-9">{{ $student->phone }}</dd>

            </dl>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('students.index') }}" class="btn btn-primary">Kembali ke Daftar Siswa</a>
        </div>
    </div>
</div>
@endsection