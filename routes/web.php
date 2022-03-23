<?php

use App\Http\Controllers\MedecinController;
use App\Http\Controllers\SessionController;
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

Route::get('/', function () {
    return view('welcome');
})->name("home");



Route::get('/medecin', [MedecinController::class, "index"])->name("medecin");

Route::get('/medecin/create', [MedecinController::class, "create"])->name("medecin.create");

Route::post('/medecin/create', [MedecinController::class, "store"])->name("medecin.ajouter");

Route::delete('/medecin/{medecin}', [MedecinController::class, "delete"])->name("medecin.supprimer");

Route::put('/medecin/{medecin}', [MedecinController::class, "update"])->name("medecin.update");

Route::get('/medecin/{medecin}', [MedecinController::class, "edit"])->name("medecin.edit");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search/', [MedecinController::class, "searchNom"])->name('search');
Route::get('/searchD/', [MedecinController::class, "searchD"])->name('searchD');
Route::get('/searchS/', [MedecinController::class, "searchS"])->name('searchS');

Route::post('/logout', [SessionController::class, "destroy"]);

