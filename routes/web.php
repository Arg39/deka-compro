<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/beranda');

Route::get('/beranda', [PagesController::class, 'index'])->name('beranda');
Route::get('/tentang-kami', [PagesController::class, 'about'])->name('tentang');
