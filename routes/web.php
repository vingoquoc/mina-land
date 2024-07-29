<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioDetails;
use App\Http\Controllers\Home;


Route::get('/', [Home::class, 'show']);
Route::get('/portfolio-details/{id}', [PortfolioDetails::class, 'show']);