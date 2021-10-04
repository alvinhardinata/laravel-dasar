<?php

use Illuminate\Support\Facades\Route;

//Parameter Wajib
Route::get('/nama-framework/{nama}', function ($nama) {
    return 'Nama Framework yang dimasukan adalah: ' .$nama;
});

Route::get('/nama-framework/{nama}/tahun-rilis/{tahun}', function ($nama, $tahun) {
    return 'Nama Framework yang dimasukan adalah: ' .$nama . '<br> <b>Tahun rilis</b> : ' . $tahun;
});

Route ::get('/nama-framework/{nama?}', function ($nama = 'wajib diisi') {
return 'Nama Saya Adalah : ' .$nama;
});

Route::get('/hitung-luas-segitiga/{alas}/tinggi/{tinggi}' , function ($alas, $tinggi) {
    return 'hasil luas segitiganya : ' .($alas * $tinggi) * 0.5;
});