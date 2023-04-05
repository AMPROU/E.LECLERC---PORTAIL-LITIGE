<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Magasin;
use Socialite;


class compteController extends Controller
{
    
    public function show ()
        {
            if (! auth()->check()) 
            {
                return redirect('/');
            } 
                // Recuperation des infos Magasins
                $magasin = Magasin::where('id', Auth::user()->magasin_id)->first();
                return view("compte.show", ['magasin' => $magasin]);
         }
        }
        

