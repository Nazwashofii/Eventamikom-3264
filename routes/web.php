<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return view('profil'); // atau bisa ke halaman lain
});
Route::get('/tentang', function () {
return '<h1>Ini adalah Halaman Tentang Aplikasi Event Hub</h1>';
});
Route::get('/kontak', function () {
return view('contact');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/events', function () {
    return view('admin.events');
});
Route::get('/transaksi', function () {
    return view('admin.transactions');
});
Route::get('/tiket', function () {
    return view('ticket');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/event-detail', function () {
    return view('event-detail');
});
