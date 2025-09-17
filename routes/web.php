<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/beranda');

Route::get('/beranda', [PagesController::class, 'index'])->name('beranda');
Route::get('/tentang-kami', [PagesController::class, 'about'])->name('tentang');
Route::get('/layanan', [PagesController::class, 'service'])->name('layanan');
Route::get('/kontak', [PagesController::class, 'contact'])->name('kontak');
Route::post('/kontak', [MessageController::class, 'store'])->name('kontak.store');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');

// Login routes
Route::get('/login', [PagesController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('web')->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard route (protected)
Route::middleware(['auth'])->group(
    function () {
        Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/admin/message', [PagesController::class, 'adminMessage'])->name('admin.message');

        // Blog resource routes
        Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin.blog.index'); // Use only this for index
        Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/admin/blog', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/admin/blog/{id}', [BlogController::class, 'show'])->name('admin.blog.show');
        Route::get('/admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('/admin/blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::delete('/admin/blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
    }
);
