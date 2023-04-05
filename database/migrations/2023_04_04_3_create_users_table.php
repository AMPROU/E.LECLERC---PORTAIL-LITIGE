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

    {   Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar');
            $table->string('magasin_id');
            $table->string('google_id')->nullable();
            $table->string('permissions_id');
            $table->string('token');
            $table->string('token_expire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};