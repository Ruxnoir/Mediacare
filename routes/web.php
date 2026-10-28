<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| Autentikasi (tampilan)
|--------------------------------------------------------------------------
| Endpoint POST untuk memproses login belum dibuat — silakan hubungkan
| dengan controller/auth backend nanti.
*/
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/login/admin', fn () => view('auth.login-admin'))->name('login.admin');
Route::get('/login/dokter', fn () => view('auth.login-dokter'))->name('login.dokter');
