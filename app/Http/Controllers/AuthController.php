<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    
    // Page de connexion
    public function connexion(request $request)
    {
        return view('auth.login');
    }

    // Page d'inscription
    public function inscription(request $request)
    {
        return view('auth.register');
    }
    
    /*S'INSCRIRE*/
    public function create(request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:12',
        ]);
        /*SI LE FORMULAIRE EST VALIDE, ENREGISTRER UN NOUVEL UTILISATEUR*/
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->role = 'USER';
        $user->password = Hash::make($request->password);
        $user->save();
        if ($user) {
            return redirect()->route('page-login')->with('success', 'Votre formulaire à été enregistré avec succès');
        } else {
            return back()->with('Echec', 'Email ou mot de passe incorrect');
        }
    }

    /*SE CONNECTER*/
    public function check_user(request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6|max:12',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            Session::put('UserId', $user->id);
            Session::put('UserName', $user->nom);
            Session::put('UserRole', $user->role);
            return redirect()->route('TABLEAU');
        } else {
            return back()->with('echec', 'Email ou mot de passe incorrect');
        }
    }


    /** SE DECONNECTER */
    public function logout()
    {
        if(Session()->has('UserId')){
            Session()->pull('UserId');
            Session()->pull('UserName');
            Session()->pull('UserRole');
            // dd(Session::get('UserName'));
            Auth::guard('web')->logout();
            return redirect()->route('page-login')->with('deconnecté');
        }
    }


    // Accéder à la mot de passe oublié
    public function check_password(request $request)
    {
        return view('auth.forgot');
    }


    //LISTES VENDEURS
    public function voir_vendeurs(){
        $users  = user::all();
        return view('Admin.vendeurs', compact('users'));
    }
    // SUPPRIMER VENDEURS
    public function delete_vendeurs($id)
    {
        $user = User::find($id);
        if (!$user) {
        return back()->with('error', 'Le vendeur n\'existe pas.');
        }
        $user->delete();
        return back()->with("success", "Vendeur supprime");
    }

}