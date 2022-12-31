<?php

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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'login']);


Route::get('/realtime', [App\Http\Controllers\HomeController::class, 'realtime']);
Route::get('/voltage-latest/{voltage}', [App\Http\Controllers\Users\HomeController::class, 'voltageLatest']);
Route::get('/barchart/{ranges}', [App\Http\Controllers\Users\PlaybackController::class, 'barChart']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('role:admin')->name('home');
Route::get('/home-user', [\App\Http\Controllers\Users\HomeController::class, 'index'])->middleware('role:user')->name('home-user');


Auth::routes();

Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee');
Route::get('/addemployee', [App\Http\Controllers\EmployeeController::class, 'addemployee'])->name('addemployee');
Route::post('/insertemployee', [App\Http\Controllers\EmployeeController::class, 'insertemployee'])->name('insertemployee');

Route::get('/editemployee/{id}', [App\Http\Controllers\EmployeeController::class, 'editemployee'])->name('editemployee');
Route::post('/updateemployee/{id}', [App\Http\Controllers\EmployeeController::class, 'updateemployee'])->name('updatetemployee');

Route::get('/deleteemployee/{id}', [App\Http\Controllers\EmployeeController::class, 'deleteemployee'])->name('deleteemployee');

Route::get('/playback-admin', [\App\Http\Controllers\PlaybackAdminController::class, 'index'])->middleware('role:admin')->name('playback-admin');

Route::resource('/report', \App\Http\Controllers\ReportController::class);
Route::get('/filter-report', [\App\Http\Controllers\ReportController::class, 'filter']);
Route::get('/playback', [\App\Http\Controllers\Users\PlaybackController::class, 'index'])->middleware('role:user')->name('playback');
