<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('acceuil');
});
Route::get("/acceuil", function(){
    return view("acceuil");
} );

Route::get("/pdf-generate", [PdfController::class,'index']);
Route::get("/admin", [AdminController::class,'afficheDonne']);

Route::get("/compte", [AdminController::class,'afficheDonneBase']);
Route::get("/fiche", [AdminController::class,'fiche']);

Route::get("/test", [AdminController::class,'affichetest']);
Route::get("/etudiante/{s?}", [CandidatureController::class,'etudiante']);
Route::get('/index',[AdminController::class,'index'])->name('admin.index');



Route::get("/etudiant", [CandidatureController::class,'create']);
Route::post("/ajouterE", [CandidatureController::class,'store'])->name('ajouterE');
Route::patch("/etudianteupdate", [CandidatureController::class,'etudianteupdate'])->name('etudianteupdate');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
