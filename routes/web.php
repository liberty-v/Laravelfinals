<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BoarderzController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomtController;
use App\Http\Controllers\MaintenanceController;
use App\Models\Maintenance;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PagesController::class,'index']);
Route::get('/about', [PagesController::class,'about']);



Route::resource('boarders',BoarderzController::class);
Route::resource('bills',BillsController::class);
Route::resource('roomt',RoomtController::class);
Route::resource('maintenance',MaintenanceController::class);





Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
