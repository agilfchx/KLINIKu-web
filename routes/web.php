<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;

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

Route::get('/', [GuestController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin-dashboard',
[AdminController::class, 'dashboard'])->name('dashboard');

Route::post('/create', [GuestController::class, 'store']);

Route::post('/admin-dashboard/update/{id}', [AdminController::class, 'update']);
Route::get('/admin-dashboard/delete/{id}', [AdminController::class, 'destroy']);

Route::get('/admin-dashboard/progress/{id}', [AdminController::class, 'progress']);
Route::get('/admin-dashboard/complete/{id}', [AdminController::class, 'complete']);
Route::get('/admin-dashboard/cancel/{id}', [AdminController::class, 'cancel']);
