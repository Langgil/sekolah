@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Siswa</h2>
        <a class="btn btn-success" href="{{ route('students.create') }}">Tambah Siswa</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @php $i = 0; @endphp <!-- Inisialisasi variabel $i -->
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->class }}</td>
            <td>{{ $student->address }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                    <a class="btn btn-primary btn-sm" href="{{ route('students.edit',$student->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    <a class="btn btn-info btn-sm" href="{{ route('students.show', $student->id) }}">Lihat</a>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $students->links() !!}
</div>
@endsection
