<?php

use App\Livewire\Presensi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/login', function () {
    return redirect('/dashboard/login');
})->name('login');

Route::get('/presensi', Presensi::class)->name('presensi')->middleware(["auth", "isLeave"]);
