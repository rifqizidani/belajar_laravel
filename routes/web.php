<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('CalonMurid.index');
});

Route::get('/pendaftaran', function () {
    return view('CalonMurid.pendaftaran');
});

Route::get('/pengumuman', function () {
    return view('CalonMurid.pengumuman');
});
