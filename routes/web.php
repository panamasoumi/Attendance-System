<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

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

   
Route::get('/', [AttendanceController::class, 'index'])->name('attendance.index');

Route::post('/store', [AttendanceController::class, 'store'])->name('attendance.store');
    

