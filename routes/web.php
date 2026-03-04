<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/company', [PageController::class, 'company'])->name('company');
Route::get('/business', [PageController::class, 'business'])->name('business');
Route::get('/recruit', [PageController::class, 'recruit'])->name('recruit');
Route::get('/news', [PageController::class, 'news'])->name('news');
