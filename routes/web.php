<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReceiptController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::post('/receipt/create', [ReceiptController::class, 'store'])->name('receipt.create');

Route::get('/receipt/index', [ReceiptController::class, 'index'])->name('receipt.index');
