<?php
#      ___                        _              
#     /   \ ___  _ __ ___    ___ | |_  ___  _ __ 
#    / /\ // _ \| '_ ` _ \  / _ \| __|/ _ \| '__|
#   / /_//|  __/| | | | | ||  __/| |_|  __/| |   
#  /___,'  \___||_| |_| |_| \___| \__|\___||_|   
#            
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Magasin extends Model
{

    protected $table = 'magasins';

    protected $fillable = [
        'nom_magasin',
    ];

}
