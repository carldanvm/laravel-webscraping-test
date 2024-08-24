<?php

use App\Http\Controllers\ScrapController;
use Illuminate\Support\Facades\Route;

Route::get('/{id?}', [ScrapController::class, 'index'])->name('scrap');


