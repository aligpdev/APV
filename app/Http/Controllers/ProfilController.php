<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AuthController;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    //page profil Utilisateur
    public function voir_profil(){
        $user = Auth::user();
        return view('Admin.profil', ['singleUser'=> $user]);
    }

}