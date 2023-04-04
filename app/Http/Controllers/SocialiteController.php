<?php
#      ___                        _              
#     /   \ ___  _ __ ___    ___ | |_  ___  _ __ 
#    / /\ // _ \| '_ ` _ \  / _ \| __|/ _ \| '__|
#   / /_//|  __/| | | | | ||  __/| |_|  __/| |   
#  /___,'  \___||_| |_| |_| \___| \__|\___||_|   
#            

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;
use App\Models\User;
use App\Models\Magasin;
use App\AuthenticateUser;
use Illuminate\Support\Facades\Auth;


class SocialiteController extends Controller
{
    // Les tableaux des providers autorisés
    protected $providers = [ "google"];

#########################################################################################
    # La vue pour les liens vers les providers
    public function loginRegister () 
    {
    	return view("socialite.login-register");
    }
#########################################################################################
    # La vue pour les liens vers les providers
    public function Exit (Request $request) 
    {   
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
#########################################################################################

    # redirection vers le provider
    public function redirect (Request $request) 
    {

        $provider = $request->provider;

        // On vérifie si le provider est autorisé
        if (in_array($provider, $this->providers)) {
            return Socialite::driver($provider)->redirect(); // On redirige vers le provider
        }
        abort(404); // Si le provider n'est pas autorisé
    }
#########################################################################################

    // Callback du provider
    public function callback (Request $request) 
    {

        $provider = $request->provider;

        if (in_array($provider, $this->providers)) 
        {
        	// Les informations provenant du provider
        	$data = Socialite::driver($request->provider)->user();
            
            # Social login - register
            $googleid = $data->id;
            $nickname = $data->nickname;
            $name = $data->getName(); // le nom
            $email = $data->email; // L'adresse email
            $avatar = $data->avatar; //Avatar
            $token = $data->token;
            $token_expire = $data->expiresIn;           

            # 1. On récupère l'utilisateur à partir de l'adresse email
             $user = User::where("email", $email)->first();
        
            # 2. Si l'utilisateur existe
             if (isset($user)) 
            {
                // Mise à jour des informations de l'utilisateur
                $user->name = $name;
                $user->save();
            }
            else
            {
            # 3. Si l'utilisateur n'existe pas, on l'enregistre
                //Ont verifie que le domaine possède les droits de se connecter.
                $elements = explode("@", $email); // nom.prenom = (elements[0]) ; magasin.leclerc = (elements[1])
                $elements2 = explode(".",$elements[1]); // magasin(elements2[0]) ; leclerc = (elements2[1])
                
                if($elements2[1] <> "leclerc")
                    { 
                    //Redirection de l'utilisateur si le domaine n'est pas leclerc
                    return redirect('BugContact'); 
                    }

                // Recuperation des infos Magasins
                $magasins = Magasin::where("domaine", $elements2[0])->first();
                if (!isset($magasins)) 
                    {
                    // Redirection de l'utilisateur si magasin non present dans la table magasin
                    return redirect('BugContact'); 
                    }

                //Generation D'un mot de passe Aléatoire
                $length = 10;
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';
                for ($i = 0; $i < $length; $i++) 
                    {
                    $index = rand(0, strlen($characters) - 1);
                    $randomString .= $characters[$index];
                    }

                // Enregistrement de l'utilisateur
                $user = User::create(
                    [
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt($randomString),
                    'magasin_id' => $magasins->id,
                    'avatar' => $avatar,
                    'google_id'=> $googleid,
                    'permissions_id' => 1,
                    'token' => $token,
                    'token_expire' => $token_expire
                    ]);
            }




        # 4. On connecte l'utilisateur
        auth()->login($user);

        # 5. On redirige l'utilisateur vers /home
        if (auth()->check())
            { 
            return redirect('home');
            }
            abort(404);
        }
    }
#########################################################################################
}