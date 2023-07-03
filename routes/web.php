<?php

use App\Http\Controllers\AlebraController;
use App\Http\Controllers\AmbienteController;
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
//Rotas de livre acesso
Route::get('/', [SiteController::class, 'index'])->name('/');
Route::get('/eleicoes', [SiteController::class, 'eleicoes'])->name('eleicoes');
Route::get('/depest', [SiteController::class, 'depest'])->name('depest');
Route::get('/depest/{cand?}', [SiteController::class, 'showDepest'])->name('show_depest');
Route::get('/depest/municipio/{munic?}', [SiteController::class, 'showMunic'])->name('show_munic');
Route::get('/depfed', [SiteController::class, 'depfed'])->name('depfed');
Route::get('/depfed/{cand?}', [SiteController::class, 'showDepfed'])->name('show_depfed');
Route::get('/depfed/municipio/{munic?}', [SiteController::class, 'showMunicFed'])->name('show_munic_fed');
Route::get('/senado', [SiteController::class, 'senado'])->name('senado');
Route::get('/senado/{cand?}', [SiteController::class, 'showSenado'])->name('show_senado');
Route::get('/senado/municipio/{munic?}', [SiteController::class, 'showMunicSen'])->name('show_munic_sen');
Route::get('/governo', [SiteController::class, 'governo'])->name('governo');
Route::get('/governo/{cand?}', [SiteController::class, 'showGoverno'])->name('show_governo');
Route::get('/governo/municipio/{munic?}', [SiteController::class, 'showMunicGov'])->name('show_munic_gov');
Route::get('/governo-2t', [SiteController::class, 'governo2t'])->name('governo-2t');
Route::get('/governo-2t/{cand?}', [SiteController::class, 'showGoverno2t'])->name('show_governo-2t');
Route::get('/governo-2t/municipio/{munic?}', [SiteController::class, 'showMunicGov2t'])->name('show_munic_gov-2t');


Route::get('presid', [SiteController::class, 'presid'])->name('presid');
Route::get('presid-2t', [SiteController::class, 'presid2t'])->name('presid-2t');

//Rota de autenticação
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/dashboard', [ServerController::class, 'index'])
    ->name('dashboard');

//Rotas do Grupo Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'can:admin'], function (){
    Route::get('dashboard-admin', [UserController::class, 'admin'])->name('dashboard-admin');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
});

//Rotas do grupo Pesquisa
Route::group(['prefix' => 'pesq', 'as' => 'pesq.', 'middleware' => 'can:pesq'], function (){
    Route::get('dashboard-pesq', [ServerController::class, 'pesq'])->name('dashboard-pesq');
    Route::resource('alebras', AlebraController::class);
    Route::resource('ambientes', AmbienteController::class);

    //rotas que vão trabalhar com o ajax
    Route::get('/ambientes/get-alas/{id}', [AmbienteController::class, 'getAlas']);
    Route::get('/ambientes/get-andars/{id}', [AmbienteController::class, 'getAndars']);
});

//Rotas do grupo legislação
Route::group(['prefix' => 'legis', 'as' => 'legis.', 'middleware' => 'can:legis'], function (){

});
