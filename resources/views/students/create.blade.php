@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data Siswa</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Kelas</label>
                            <input type="text" name="class" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>NIS</label>
                            <input type="text" name="student_id" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Telepon</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                                                
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection