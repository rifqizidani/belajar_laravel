<?php

use App\Http\Controllers\CalonMuridController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CalonMuridController::class, 'index']);