@extends('layouts.app')

@section('content')
<style>
    /* Custom Styles */
    body {
        background-color: #f4f6f9;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .jumbotron {
        background: url('{{ asset('asset/Acp.jpeg') }}') no-repeat center center; /* Background image */
        background-size: cover; 
        color: white;
        padding: 4rem 2rem;
        margin-bottom: 0;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .keunggulan-box, .jurusan-card {
        background-color: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .keunggulan-box:hover, .jurusan-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }


    .activity-card {
            background-color: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }
        .activity-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.15);
        }
        .activity-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        /* Specific icon colors */
        .coding-icon {
            color: #0077be; /* Deep blue for coding */
        }
        .praktikum-icon {
            color: #00a86b; /* Green for practical work */
        }
        .sertifikasi-icon {
            color: #ff6b6b;
        }
        
</style>

<div class="jumbotron text-center">
    <h1 class="display-4">Selamat Datang di SMK Bina Utama</h1>
    <p class="lead">Platform Pendidikan Masa Depan, Mencetak Generasi Unggul dan Kompeten</p>
    <hr class="my-4">
    <p>Bergabunglah dengan kami untuk meraih masa depan yang cemerlang!</p>
    <div class="d-flex justify-content-center gap-3">
        <a class="btn btn-light btn-lg" href="{{ route('students.index') }}" role="button">
            <i class="fas fa-users me-2"></i>Lihat Data Siswa
        </a>
        <a class="btn btn-outline-light btn-lg" href="#pendaftaran" role="button">
            <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
        </a>
    </div>
</div>

<section class="container py-5">
    <h2 class="section-heading">Keunggulan SMK Bina Utama</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="keunggulan-box text-center">
                <i class="fas fa-industry fa-3x text-primary mb-3"></i>
                <h4>Link & Match Industri</h4>
                <p>Kurikulum terintegrasi dengan kebutuhan dunia industri modern</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="keunggulan-box text-center">
                <i class="fas fa-certificate fa-3x text-success mb-3"></i>
                <h4>Sertifikasi Profesional</h4>
                <p>Program sertifikasi kompetensi bertaraf internasional</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="keunggulan-box text-center">
                <i class="fas fa-users fa-3x text-warning mb-3"></i>
                <h4>Tenaga Pendidik Unggul</h4>
                <p>Guru berkualifikasi dan berpengalaman dari praktisi industri</p>
            </div>
        </div>
    </div>
</section>

<section id="jurusan" class="bg-light py-5">
    <div class="container">
        <h2 class="section-heading">Program Keahlian</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card jurusan-card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-laptop fa-3x text-primary mb-3"></i>
                        <h4 class="card-title">Teknik Komputer & Jaringan</h4>
                        <p class="card-text">Spesialisasi jaringan komputer dan infrastruktur IT terkini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card jurusan-card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-cogs fa-3x text-success mb-3"></i>
                        <h4 class="card-title">Teknik Mesin</h4>
                        <p class="card-text">Keahlian manufaktur dan rekayasa mesin modern</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card jurusan-card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-laptop-code fa-3x text-primary mb-3"></i>
                        <h4 class="card-title">PPLG</h4>
                        <p class="card-text">Pengembangan Perangkat Lunak dan Gim</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kegiatan-rpl" class="py-5">
    <div class="container">
        <h2 class="section-heading">Kegiatan Utama RPL</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card activity-card h-100 text-center p-4">
                    <div class="activity-icon coding-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h5 class="card-title mb-3">Workshop Coding</h5>
                    <p class="card-text">Pelatihan intensif pengembangan perangkat lunak dengan teknologi terkini.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card activity-card h-100 text-center p-4">
                    <div class="activity-icon praktikum-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h5 class="card-title mb-3">Praktikum Industri</h5>
                    <p class="card-text">Program magang untuk pengalaman langsung di perusahaan teknologi.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card activity-card h-100 text-center p-4">
                    <div class="activity-icon sertifikasi-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h5 class="card-title mb-3">Sertifikasi Profesi</h5>
                    <p class="card-text">Persiapan dan pendampingan sertifikasi keahlian pengembangan perangkat lunak.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pendaftaran -->
<section id="pendaftaran" class="bg-primary text-white py-5">
    <div class="container text-center">
        <h2 class="mb-4">Pendaftaran Siswa Baru</h2>
        <a class="btn btn-outline-light btn-lg" href="{{ route('pendaftaran.index') }}" role="button">
            <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
        </a>        
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 2024 SMK Bina Utama. Hak Cipta Dilindungi.</p>
        <div class="social-links mt-3">
            <a href="#" class="text-white mx-2"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection