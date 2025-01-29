<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\Siswa;  // Pastikan model siswa ada untuk menyimpan data pendaftaran

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran.index');  // Halaman untuk menampilkan formulir
    }

    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:siswas,email',
        'telepon' => 'required|numeric',
        'alamat' => 'required|string',
        'jurusan' => 'required|string',
    ]);

    // Simpan data pendaftaran
    $siswa = new Siswa;
    $siswa->nama = $request->nama;
    $siswa->email = $request->email;
    $siswa->telepon = $request->telepon;
    $siswa->alamat = $request->alamat;
    $siswa->jurusan = $request->jurusan;
    $siswa->save();



    // Redirect ke halaman konfirmasi
    return redirect()->route('pendaftaran.konfirmasi')->with('success', 'Pendaftaran berhasil! Silakan cek email untuk konfirmasi.');
}
    
}
