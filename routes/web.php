<?php

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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
// Halaman Login
Route::get('/login', function () {
    return view('login');
});

// Proses Login (menangani POST request)
Route::post('/login', function () {
    // Ambil input dari formulir
    $email = request('email');
    $password = request('password');

    // Cek email dan password (untuk login sederhana)
    if ($email == 'hckon@example.com' && $password == 'password123') {
        // Jika login berhasil, alihkan ke halaman home
        return redirect('/home');
    }

    // Jika login gagal, kembali ke halaman login dengan pesan error
    return redirect('/login')->withErrors(['email' => 'Email atau password salah']);
});
