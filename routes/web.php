<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index'])->name('/');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/dashboard', [ServerController::class, 'index'])
    ->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'can:admin'], function (){
    Route::get('dashboard-admin', [UserController::class, 'admin'])->name('dashboard-admin');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
});

Route::group(['prefix' => 'pesq', 'as' => 'pesq.', 'middleware' => 'can:pesq'], function (){

});

Route::group(['prefix' => 'legis', 'as' => 'legis.', 'middleware' => 'can:legis'], function (){

});
