<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CommerceController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PubliciteController;
use App\Http\Controllers\CategorieController;


/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontendController::class, 'home'])->name('ACCUEIL');
Route::get('/details/{id}', [FrontendController::class, 'details_produit'])->name('DETAILS-PRODUIT');
Route::get('/boutique', [FrontendController::class, 'shop'])->name('BOUTIQUE');
Route::get('/blog', [FrontendController::class, 'view_blog'])->name('BLOG');
Route::get('/contact', [FrontendController::class, 'info'])->name('CONTACT');
Route::get('/panier', [FrontendController::class, 'buy'])->name('PANIER');
Route::get('/paiement', [FrontendController::class, 'checkout'])->name('PAYER');
// Route::get('/detailsproduit/{commerce}', function (Commerce $commerce) {
//     return view('Client.home', compact('commerce'));
// })->name('DETAILS-PRODUIT');
// Route::get('/newsletter', [NewsletterController::class, 'showNewsletter'])->name("voir-newsletter");
// Route::post('/sendarticles', [NewsletterController::class, 'createNewsletter'])->name('send-newsletter');

/*
|--------------------------------------------------------------------------
| AUTHENTIFICATION ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'connexion'])->name('page-login');
Route::get('/register', [AuthController::class, 'inscription'])->name('page-register');
Route::post('/newuser', [AuthController::class, 'create_account'])->name("NEWUSER");
Route::post('/checkuser', [AuthController::class, 'check_user'])->name("AUTHLOGIN");
Route::get('/logout', [AuthController::class, 'logout'])->name("LOGOUT");
Route::get('/forgot', [AuthController::class, 'check_password'])->name('FORGOT');

// Route::get('login', [AuthController::class, 'connexion'])->name('page-login');
// Route::get('register', [AuthController::class, 'inscription'])->name('page-register');
// Route::post('register', [AuthController::class, 'create'])->name('register');
// Route::post('login', [AuthController::class, 'check_user'])->name('login');
// Route::post('logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| BACKEND ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware('auth','verified', 'CacheControl')->group(function(){
    //Tableau de bord
    Route::get('/tableau', [BackendController::class, 'dashboard'])->name('TABLEAU');
    //Afficher commandes back
    Route::get('/commandes', [BackendController::class, 'voir_commandes'])->name('COMMANDES');
    //Afficher factures back
    Route::get('/facture', [BackendController::class, 'voir_factures'])->name('FACTURE');
    //Formulaire vendre PRODUIT
    Route::get('/vendre', [CommerceController::class, 'ajouter_produit'])->name('AJOUTER-PRODUIT');
    //Créer un PRODUIT back
    Route::post('/creerproduit', [CommerceController::class, 'store_vente'])->name('CREER-PRODUIT');
    //Afficher mes PRODUITS back
    Route::get('/listproduits', [CommerceController::class, 'voir_produits'])->name('VOIR-PRODUITS');
    //Modifié mes PRODUIT back
    Route::put('/utilisateurs/{id}', [CommerceController::class, 'update_produit'])->name('MODIFIER-PRODUIT');
    //Supprimer mes PRODUIT back
    Route::delete('/SupprimerProduit/{id}', [CommerceController::class, 'delete_produit'])->name('SUPP-PRODUIT');
    //Afficher PUBLICITE back
    Route::get('/publicites', [PubliciteController::class, 'voir_publicite'])->name('VOIR-PUBLICITES');
    //Créer une PUBLICITE back
    Route::post('/sendpub', [PubliciteController::class,'store_publicite'])->name('CREER-PUBLICITE');
    //Afficher VENDEURS back
    Route::get('/vendeurs', [AuthController::class, 'voir_vendeurs'])->name('VOIR-VENDEURS');
    //Supprimer un VENDEURS back
    Route::delete('/SupprimerVendeur/{id}', [AuthController::class, 'delete_vendeurs'])->name('SUPP-VENDEURS');
    //Profil UTILISATEURS back
    Route::get('/profil', [ProfilController::class, 'voir_profil'])->name('PROFIL');
    //Afficher CATEGORIES back
    Route::get('/categorie', [CategorieController::class, 'voir_categories'])->name('VOIR-CATEGORIE');
    //Créer CATEGORIES back
    Route::post('/ajouter-categorie', [CategorieController::class, 'store_categorie'])->name('CREER-CATEGORIE');
    //Modifié mon PROFIL UTILISATEURS back
    // Route::put('/profil/{id}', [AuthController::class, 'update_profil'])->name('MODIFIER-PROFIL');



    //Supprimer mes messages
    Route::delete('/SupprimerSms/{id}', [MessagerieController::class, 'destroySms'])->name('deleteMessage');
});
