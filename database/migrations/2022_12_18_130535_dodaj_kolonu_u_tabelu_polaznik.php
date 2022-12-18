<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajKolonuUTabeluPolaznik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('polazniks', function (Blueprint $table) {
            
            
             $table->string('email'); 
         //    $table->renameColumn('brojTelefona','kontakt'); 

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('polazniks', function (Blueprint $table) {
            
            
            $table->removeColumn('email'); 
           // $table->renameColumn('kontakt','brojTelefona'); 
           
       });
    }
}
