<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Couleur;

class CouleurController extends Controller
{
    // Page Couleur
    public function voir_couleurs(){
        $couleurs = Couleur::all();
        return view('Admin.couleur', compact('couleurs'));
    }


    // Ajouter une Couleure
    public function store_couleur(Request $request)
    {
         // Validation des données
         $request->validate([
             'couleur_produit' => 'required|string|max:255',
         ]);
 
         // Création d'une nouvelle couleure
         $couleur = new Couleur();
         $couleur->couleur_produit = $request->input('couleur_produit');
 
         // Sauvegarde de la Couleure
         $couleur->save();
 
         // Redirection avec message de succès
         return redirect()->route('VOIR-COULEUR')->with('success', 'Couleure ajoutée avec succès');
    }


    // Supprimer une couleure
    public function delete_couleur($id)
    {
        $couleur = Couleur::find($id);

        if (!$couleur) {
            return back()->with('error', 'La couleure n\'existe pas.');
        }

        // Suppression de la couleur
        $couleur->delete();

        return back()->with('success', 'Couleur supprimée avec succès.');
    }
}
