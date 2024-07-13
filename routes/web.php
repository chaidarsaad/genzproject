<?php

use App\Http\Controllers\Admin\LandingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.landing');
// });

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('/message', [LandingController::class, 'message'])->name('send-message');
