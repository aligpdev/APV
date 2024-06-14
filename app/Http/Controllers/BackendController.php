<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Commerce;
use Illuminate\Support\Facades\Auth;


class BackendController extends Controller
{

    public function dashboard(){
        $nosproduits = Commerce::all()->where('user_id', Auth::user()->id)->count();
        $totalproduits = Commerce::all()->count();
        $totalvendeurs = User::all()->count();
        return view('Admin.tableau', ['totalvendeurs'=>$totalvendeurs, 'nosproduits'=>$nosproduits, 'totalvendeurs'=>$totalvendeurs]);
    }

    public function voir_commandes(){
        return view('Admin.commandes');
    }

    public function voir_factures(){
        return view('Admin.facture');
    }

}
