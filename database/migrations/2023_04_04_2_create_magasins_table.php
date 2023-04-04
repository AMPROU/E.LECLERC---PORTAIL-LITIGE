<?php
#      ___                        _              
#     /   \ ___  _ __ ___    ___ | |_  ___  _ __ 
#    / /\ // _ \| '_ ` _ \  / _ \| __|/ _ \| '__|
#   / /_//|  __/| | | | | ||  __/| |_|  __/| |   
#  /___,'  \___||_| |_| |_| \___| \__|\___||_|   
#            

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        Schema::dropIfExists('magasins');
        Schema::create('magasins', function (Blueprint $table) 
        {
            $table->id();
            $table->string('ident')->Unique;
            $table->string('nom_magasin')->Unique;
            $table->string('centrale');
            $table->string('domaine');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('ville');
            $table->timestamps();
        });

        //Insert Default Data
        DB::table('magasins')->insert
        (
            array
            (
            'ident' => '4995',
            'nom_magasin' => 'btlecouest',
            'centrale' => 'btlecouest',
            'domaine' => 'btlecouest',
            'telephone'=> '02.40.85.10.10',
            'adresse'=> 'Route de cordemais',
            'code_postal' => '44360',
            'ville' => 'Saint Etienne de montluc',
            'created_at' => now(),
            'updated_at' =>now()

            )
        );


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magasins');
    }
};
