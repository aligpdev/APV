<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Commerce;
use App\Models\Categorie;
use App\Models\User;

class CommerceController extends Controller
{

    // Page de formulaire de vente
    public function voir_produits() {
      $categories = Categorie::all();
      
      if (Auth::user()->role === 'ADMIN') {
          // Si l'utilisateur a le rôle "ADMIN", afficher tous les produits
          $commerce = Commerce::with('categorie')->get();
      } else {
          // Sinon, afficher uniquement les produits de l'utilisateur connecté
          $commerce = Commerce::with('categorie')->where('user_id', Auth::user()->id)->get();
      }
  
      return view('Admin.listproduits', compact('commerce', 'categories'));
    }


    // Créer un produit
    public function store_vente(Request $request)
    {
      $this->validate($request, [
          'nom_produit' => 'required|string|max:255',
          'prix_produit' => 'required|string',
          'descript_produit' => 'required|string',
          'idCategorie' => 'required|exists:categories,id',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
      ]);

      $commerce = new Commerce();
      $commerce->nom_produit = $request->input('nom_produit');
      $commerce->prix_produit = $request->input('prix_produit');
      $commerce->descript_produit = $request->input('descript_produit');
      $commerce->idCategorie = $request->input('idCategorie');
      $commerce->user_id = Auth::user()->id;

      if ($request->hasFile('image')) {
          $file_image = $request->file('image');
          $file_name_image = time() . '_' . $file_image->getClientOriginalName();
          $file_image->move(public_path('articlesImages'), $file_name_image);
          $commerce->image = $file_name_image;
      }

      $commerce->save();
      return back()->with('success', 'Produit ajouté avec succès.');
    }


    // Supprimer un Produit
    public function delete_produit($id)
    {
      $commerce = Commerce::find($id);
      if (!$commerce) {
        return back()->with('error', 'Le produit n\'existe pas.');
      }
      if ($commerce->image) {
        Storage::delete('public/articlesImages/' . $commerce->image);
      }
      $commerce->delete();
      return back()->with("success", "Produit supprime");
    }


    // Mettre à jour un Produit
    public function update_produit(Request $request, $id)
{
    $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
    ]);

    $commerce = Commerce::find($id);

    if (!$commerce) {
        return back()->with('error', 'Produit non trouvé');
    }

    // Gestion de l'image
    if ($request->hasFile('image')) {
        $file_image = $request->file('image');
        $file_name_image = "images".time().'_'.$file_image->getClientOriginalName();
        $file_image->move(public_path('articlesImages'), $file_name_image);
        $commerce->image = $file_name_image;
    }

    // Mettez à jour les autres attributs de l'article en fonction de vos besoins
    $commerce->nom_produit = $request->input('nom_produit');
    $commerce->prix_produit = $request->input('prix_produit');
    $commerce->idCategorie = $request->input('idCategorie');
    $commerce->descript_produit = $request->input('descript_produit');
    $commerce->save();

    return back()->with('success', 'Produit modifié avec succès');
}


}