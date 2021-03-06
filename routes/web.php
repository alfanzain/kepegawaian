<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/list', [AttendanceController::class, 'list']);
    Route::get('/attendance', [AttendanceController::class, 'attendance']);
    Route::get('/attend', [AttendanceController::class, 'attend']);
    Route::get('/attend-success', [AttendanceController::class, 'attendSuccess'])->name('attend-success');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
