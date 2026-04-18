<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;

// Rute User Area
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/1', [EventController::class,
'show'])->name('events.show');
Route::get('/checkout', [EventController::class,
'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

// Rute Admin Area
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

Route::get('/', [DashboardController::class,

'index'])->name('dashboard');

Route::get('/events', [EventController::class,

'indexAdmin'])->name('events.index');
// dan seterusnya...
});

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
Route::get('/profil', function () {
    return view('profil');
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
