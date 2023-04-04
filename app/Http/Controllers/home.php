<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Magasin;
use Socialite;


class home extends Controller
{
    
    public function index () 
    {
        if (! auth()->check()) {
            return redirect('/');
        }

        // Recuperation des infos Magasins
        $magasin = Magasin::where('id', Auth::user()->magasin_id)->first();

    	return view("home", ['magasin' => $magasin]);

    }
}
