@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Website Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .about-section {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 30px;
        }
        .about-section h2 {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .about-card {
            background-color: #f8f9fa;
            border-left: 4px solid #3498db;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .about-card:hover {
            transform: translateY(-10px);
        }
        .about-card h4 {
            color: #2980b9;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="about-section">
            <h2 class="text-center mb-4">Tentang Kami</h2>
            
            <p class="text-center mb-5">Website Sekolah adalah platform modern yang dirancang untuk memudahkan pengelolaan data siswa dengan teknologi terkini.</p>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="about-card">
                        <h4>Visi</h4>
                        <p>Menjadi platform pendidikan terdepan dalam pengelolaan data siswa, mengintegrasikan teknologi canggih untuk mendukung kemajuan pendidikan.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-card">
                        <h4>Misi</h4>
                        <p>Menyediakan sistem manajemen data yang efisien, mudah digunakan, aman, dan berkelanjutan untuk mendukung proses administrasi sekolah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection