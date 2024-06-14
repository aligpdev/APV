<?php

namespace App\Http\Controllers;
use App\Models\Publicite;
use Illuminate\Http\Request;

class PubliciteController extends Controller
{

    //Publicite afficher front
    // public function home()
    // {
    //     $publicite  = Publicite::all();
    //     return view('Client.index', compact('publicite'));
    // }

    //Publicite afficher back
    public function voir_publicite()
    {
        $publicite  = Publicite::all();
        return view('Admin.publicites', compact('publicite'));
    }


    //Publicite ajouter back
    public function creer_publicite()
    {
        return view('Admin.sendpub');
    }


    //Publicite creer back
    public function store_publicite(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);

        // Gestion d'image
        $publicite = new Publicite();
        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            $file_name_image = "images" . time() . '_' . $file_image->getClientOriginalName();
            $file_image->move(public_path('articlesImages'), $file_name_image);

            // Supprimer l'ancienne publicité s'il y en a une
            $oldPublicite = Publicite::first();
            if ($oldPublicite) {
                // Supprimez l'ancienne image du serveur
                $oldImagePath = public_path('articlesImages') . '/' . $oldPublicite->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                // Supprimez l'ancienne publicité de la base de données
                $oldPublicite->delete();
            }
            $publicite->image = $file_name_image;
        }

        $publicite->save();
        return back()->with('success', 'Image publiée avec succès');
    }


}