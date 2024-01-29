<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fumetti;
use App\Http\Models\Fumetto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [fumetti::class,"index"]);

