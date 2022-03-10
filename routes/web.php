<?php

use App\Http\Controllers\MedecinController;
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



