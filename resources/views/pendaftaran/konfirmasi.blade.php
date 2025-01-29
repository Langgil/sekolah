@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h2 class="display-4 text-primary">Pendaftaran Berhasil!</h2>
        <p class="lead">Terima kasih telah mendaftar di SMK Bina Utama.</p>
        <p class="text-muted">Kami telah menerima pendaftaran Anda. Cek email Anda untuk informasi lebih lanjut.</p>
    </div>

    <!-- Success Message -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="alert alert-success text-center">
                <i class="fas fa-check-circle fa-4x text-success mb-3"></i>
                <h4 class="alert-heading">Pendaftaran Anda Telah Diterima!</h4>
                <p>Selamat, Anda telah berhasil mendaftar. Kami akan menghubungi Anda melalui email untuk langkah selanjutnya.</p>
                <p><strong>Pastikan untuk memeriksa email Anda.</strong></p>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg w-100">
                <i class="fas fa-sign-in-alt me-2"></i> Masuk ke Akun
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="{{ route('home') }}" class="btn btn-outline-primary btn-lg w-100">
                <i class="fas fa-home me-2"></i> Kembali ke Halaman Utama
            </a>
        </div>
    </div>

    <!-- Additional Info Section -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Apa yang Harus Anda Lakukan Selanjutnya?</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope text-primary me-2"></i> Periksa email Anda untuk konfirmasi pendaftaran dan instruksi lebih lanjut.</li>
                        <li><i class="fas fa-calendar-check text-primary me-2"></i> Ikuti petunjuk dalam email untuk menyelesaikan pendaftaran.</li>
                        <li><i class="fas fa-phone-alt text-primary me-2"></i> Hubungi kami jika Anda memiliki pertanyaan melalui <strong>email: support@smkbinautama.sch.id</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   
</div>
@endsection
