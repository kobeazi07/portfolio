<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/',[HomeController::class, 'home'])->name('HalamanHome');


Route::get('/dashboard',[PortfolioController::class, 'dashboard'])->name('HalamanDashboard');
Route::get('/portfolio',[PortfolioController::class, 'portfolio'])->name('HalamanPortfolio');

Route::post('/tambah_portfolio',[PortfolioController::class, 'tambah_portfolio'])->name('Tambah_Portfolio');