<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return 'Profil Mahasiswa Teknik Informatika UNISKA';
});

Route::get('/matkul/{nama}', function ($nama) {
    return 'Mata kuliah: ' . $nama;
});

Route::get('/semester/{angka?}', function ($angka = 3) {
    return 'Saat ini berada di semester ' . $angka;
});

Route::get('/nilai/{matkul}/{angka}', function ($matkul, $angka) {
    return "Nilai $matkul: $angka";
});

Route::get('/jadwal-kuliah', function () {
    return 'Jadwal Kuliah Semester Ini';
})->name('jadwal');

Route::get('/lihat-jadwal', function () {
    return 'Jadwal bisa dilihat di ' . route('jadwal');
});