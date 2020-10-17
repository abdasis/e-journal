<?php

use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\OnlineSubmition;
use App\Http\Livewire\Welcome;
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

Route::get('/', Welcome::class)->name('index');
Route::get('daftar', Register::class)->name('daftar');
Route::get('online-submition', OnlineSubmition::class)->name('submition');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
