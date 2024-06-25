<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    // Page Categorie
    public function voir_categories(){
        $categories = Categorie::all();
        return view('Admin.categorie', compact('categories'));
    }


    // Ajouter une categorie
    public function store_categorie(Request $request)
    {
         // Validation des données
         $request->validate([
             'produit_categorie' => 'required|string|max:255',
         ]);
 
         // Création d'une nouvelle catégorie
         $categorie = new Categorie();
         $categorie->produit_categorie = $request->input('produit_categorie');
 
         // Sauvegarde de la catégorie
         $categorie->save();
 
         // Redirection avec message de succès
         return redirect()->route('VOIR-CATEGORIE')->with('success', 'Catégorie ajoutée avec succès');
    }


    // Supprimer une catégorie
    public function delete_categorie($id)
    {
        $categorie = Categorie::find($id);

        if (!$categorie) {
            return back()->with('error', 'La catégorie n\'existe pas.');
        }

        // Suppression de la catégorie
        $categorie->delete();

        return back()->with('success', 'Catégorie supprimée avec succès.');
    }

}