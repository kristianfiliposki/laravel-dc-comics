<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fumetti;
use App\Http\Controllers\comics;
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

Route::get('/', function (){
    return view('welcome');
});
Route::get('fumetti', function (){
    return view('fumetti');
});
Route::get('logIn', function (){
    return view('logIn');
});

Route::resource('fumetti',comics::class);