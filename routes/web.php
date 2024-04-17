<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/abonare', [NewsletterController::class, 'abonare'])->name('abonare');
