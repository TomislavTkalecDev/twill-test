<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\PageDisplayController;

Route::get('/', [PageDisplayController::class, 'home'])->name('frontend.home');
Route::get('{slug}', [PageDisplayController::class, 'show'])->name('frontend.page');
