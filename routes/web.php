<?php
use App\Http\Controllers\PendaftaranController; // Ensure this is only once
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::resource('students', StudentController::class);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/pendaftaran/konfirmasi', function () {
    return view('pendaftaran.konfirmasi');
})->name('pendaftaran.konfirmasi');

// Menangani rute untuk login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::resource('students', StudentController::class);


