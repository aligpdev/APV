<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taille;

class TailleController extends Controller
{
    // Page Taille
    public function voir_tailles(){
        $tailles = Taille::all();
        return view('Admin.taille', compact('tailles'));
    }


    // Ajouter une taille
    public function store_taille(Request $request)
    {
         // Validation des données
         $request->validate([
             'taille_produit' => 'required|string|max:255',
         ]);
 
         // Création d'une taille
         $taille = new Taille();
         $taille->taille_produit = $request->input('taille_produit');
 
         // Sauvegarde de la taille
         $taille->save();
 
         // Redirection avec message de succès
         return redirect()->route('VOIR-TAILLE')->with('success', 'Taille ajoutée avec succès');
    }


    // Supprimer une taille
    public function delete_taille($id)
    {
        $taille = Taille::find($id);

        if (!$taille) {
            return back()->with('error', 'La taille n\'existe pas.');
        }

        // Suppression de la taille
        $taille->delete();

        return back()->with('success', 'Taille supprimée avec succès.');
    }
}
