<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /*
|--------------------------------------------------------------------------
| FRONTEND CONTROLLERS
|--------------------------------------------------------------------------
*/

    // Accéder à la page d'accueil
    public function home()
    {
        return view('Client.home');
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
