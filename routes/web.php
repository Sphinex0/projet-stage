<?php

use App\Exports\ChoixExport;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\ChoixClassementController;
use App\Http\Controllers\Compte_utilisatuer_grud;
use App\Http\Controllers\CondidatureController;
use App\Http\Controllers\PDFController;
use App\Models\Candidature;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

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
    return view('test-table');

// return view('admin.edit-user');
/* return redirect("/acceuil"); */

});
Route::get('/choix/export', function () {
    return Excel::download(new ChoixExport,"choix.xlsx");
});

Route::get('/admin', function () {
    return view('layouts.compte-layout');
});
Route::get("/acceuil", function(){
    return view("acceuil");
} );
Route::get("/users", function(){
    return User::select('name', 'email', 'role')->get();
}); 


//form routes
Route::get("/inscription/step1", [CandidatureController::class, "step1"])->name("step1");
Route::post("/inscription/step1", [CandidatureController::class, "postStep1"])->name("postStep1");
Route::get("/inscription/step2", [CandidatureController::class, "step2"])->name("step2");
Route::post("/inscription/step2", [CandidatureController::class, "postStep2"])->name("postStep2");
Route::get("/inscription/step3", [CandidatureController::class, "step3"])->name("step3");
Route::post("/inscription/step3", [CandidatureController::class, "postStep3"])->name("postStep3");
Route::get("/inscription/step4", [CandidatureController::class, "step4"])->name("step4");
Route::post("/inscription/step4", [CandidatureController::class, "postStep4"])->name("postStep4");

Auth::routes(["verify"=>true]);
Route::get("/suivi", [CandidatureController::class,"index"])->name('suivi')->middleware('verified');;
Route::get("/inscription", [CandidatureController::class,"create"])->middleware('verified');
Route::get("/choix_filiere", [CandidatureController::class,"choix"])->name('choix_filiere')->middleware('verified');

Route::post("/inscription/s1", [CandidatureController::class,"store"])->name("candidat-store");
Route::post("/choix/s1", [CandidatureController::class,"store_choix"])->name("choix-store");


Route::get("/choix", [ChoixClassementController::class,"index"]);
Route::get("/pdf", [PDFController::class,"generatePDF"])->name("fiche");
Route::get('/azertyuilkjhgfdsqsdfghjkjhgfdsqqjkjhgf4744fdfddffghsdfghsqSDFGHJYQSDFGHJQSDFGHJKIQSDFGHJKIGSDFGHJKLSDFGHJKJSDFJHGF515548548551',[AdminController::class,'api_candidature'])->middleware('api_auth');
Route::get('/azertyuilkjhgfdsqsdfghjkjhgfdsqqjkjhgf4744fdfddffghsdfghsqSDFGHJYQSDFGHJQSDFGHJKIQSDFGHJKIGSDFGHJKLSDFGHJKJSDFJHGF515548548552',[AdminController::class,'api_candidature_choix'])->middleware('api_auth');


Route::get("/dashboard/admin", [AdminController::class,'dashboard_admin'])->name('dashboard_admin');
Route::get("/dashboard/admin/list_candidature", [AdminController::class,'list_candidature'])->name('list_candidature');
Route::get("/dashboard/admin/compte_utilisateur", [Compte_utilisatuer_grud::class,'index'])->name('compte_utilisateur');
Route::get("/dashboard/admin/choix_candidatre", [AdminController::class,'choix_candidatre'])->name('choix_candidatre');

Route::get("/dashboard/admin/compte_utilisateur/ajouter_utilisateurs", [Compte_utilisatuer_grud::class,'create'])->name('ajouter_utilisateurs');
Route::post("/dashboard/admin/compte_utilisateur/ajouter_utilisateurs/add", [Compte_utilisatuer_grud::class,'store'])->name('ajouter_utilisateurs_add');
Route::delete("/dashboard/admin/compte_utilisateur/delete/{id?}", [Compte_utilisatuer_grud::class, 'destroy'])->name('deleteUser');
Route::post('/userForm/{id}', [Compte_utilisatuer_grud::class, 'updateForm'])->name('updateForm');
Route::put('/users/{id}', [Compte_utilisatuer_grud::class, 'update'])->name('updateUser');
Route::get('/Showdocumentcandidature/{id}', [Compte_utilisatuer_grud::class, 'show'])->name('Showdocumentcandidature')->middleware('api_auth');






Route::post("/dashboard/admin/import_candidature_excel", [AdminController::class,'import_candidature_excel'])->name('import_candidature_excel');
Route::post('/changer-etat-candidatures', [CandidatureController::class,'changerEtat']);
Route::post('/annulerEtat', [CandidatureController::class,'annulerEtat']);




/* Route::get("/admin", [AdminController::class,'afficheDonne']);
 */
/* Route::get("/compte", [AdminController::class,'afficheDonneBase']);
Route::get("/fiche", [AdminController::class,'fiche']);

Route::get("/test", [AdminController::class,'affichetest']);
Route::get("/etudiante/{s?}", [AdminController::class,'etudiante']);




Route::get("/etudiant", [CondidatureController::class,'create']);
Route::post("/ajouterE", [CondidatureController::class,'store'])->name('ajouterE');
Route::get('/index',[CondidatureController::class,'index']);

*/
/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified'); 
 */