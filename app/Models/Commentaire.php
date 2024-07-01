<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    // Méthode pour stocker un commentaire
    public function storeComment(Request $request)
    {
        // Assurez-vous que l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('page-loginùww')->with('error', 'Vous devez être connecté pour laisser un commentaire.');
        }
        
        // Validez les données du formulaire
        $request->validate([
            'content' => 'required|string',
        ]);

        // Créez un nouveau commentaire
        $comment = new Commentaire();
        $comment->user_id = Auth::user()->id; // Utilisateur connecté
        $comment->troc_id = $request->input('troc_id');
        $comment->content = $request->input('content');

        // Enregistrez le commentaire dans la base de données
        $comment->save();

        // Redirigez l'utilisateur ou affichez un message de succès
        return back()->with('succes', 'Votre commentaire a été soumis avec succès.');
    }
}
