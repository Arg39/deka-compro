<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('beranda');
Route::get('/tentang', [PagesController::class, 'about'])->name('tentang');
