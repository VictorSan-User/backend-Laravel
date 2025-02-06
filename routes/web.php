<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'index_login'])->name('index.login');

Route::get('/home', [AuthController::class, 'index_home'])->name('index.home');

Route::get('/cadastrar', [AuthController::class, 'index_cadastrar'])->name('index.cadastrar');

