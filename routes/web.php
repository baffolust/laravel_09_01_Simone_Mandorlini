<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReceiptController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');


Route::get('/receipt/create', [ReceiptController::class, 'create'])->name('receipt.create');
Route::post('/receipt/store', [ReceiptController::class, 'store'])->name('receipt.store');
Route::get('/receipt/index', [ReceiptController::class, 'index'])->name('receipt.index');
