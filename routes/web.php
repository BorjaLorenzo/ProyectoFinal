<?php

use App\Http\Controllers\C_menu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[C_menu::class, 'verInicio']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [C_menu::class,'verMenu'])->name('dashboard');

