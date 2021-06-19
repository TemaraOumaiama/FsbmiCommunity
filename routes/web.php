<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantsController;


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
    return view('login');
});
Route::get('/ChoixProfil', function () {
    return view('ChoixProfil');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/Cvetheque', function () {
    return view('Cvetheque');
});
Route::get('/inscEtud', function () {
    return view('inscEtud');
});
Route::get('/inscProf', function () {
    return view('inscProf');
});

Route::post('/AuthEtudiant',[EtudiantsController::class,'AuthEtudiant'])->name('AuthEtudiant');

Route::get('/eventAc', function () {
    return view('eventAc');
});
Route::get('/eventPr', function () {
    return view('eventPr');
});
Route::get('/offrees', function () {
    return view('offrees');
});
Route::get('/demandees', function () {
    return view('demandees');
});
Route::get('/Listeabn', function () {
    return view('Listeabn');
});
Route::get('/Listeabm', function () {
    return view('Listeabm');
});