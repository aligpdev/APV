<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commerce;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    /*
|--------------------------------------------------------------------------
| FRONTEND CONTROLLERS
|--------------------------------------------------------------------------
*/

    // Accéder a la page details d'un produit
    public function details_produit(Commerce $commerce){
        return view('Client.details', compact('commerce'));
    }

    // Accéder à la page d'accueil
    public function home()
    {
        $commerce = Commerce::with('categorie')->get();
        $categories = Categorie::all();
        return view('Client.home', compact('commerce', 'categories'));
    }

    // Accéder à la page boutique
    public function shop()
    {
        return view('Client.boutique');
    }

    // Accéder à la page blog
    public function view_blog()
    {
        return view('Client.blog');
    }

    // Accéder à la page contact
    public function info(){
        return view('Client.contact');
    }

    // Accéder à la page panier
    public function buy(){
        return view('Client.panier');
    }

    // Accéder à la page paiement
    public function checkout(){
        return view('Client.paiement');
    }
    
}
