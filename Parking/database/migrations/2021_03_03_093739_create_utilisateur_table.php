<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->integer('numutilisateur');
            $table->string('nomutilisateur', 25);
            $table->string('prenomutilisateur', 25);
            $table->string('adressemailutilisateur', 25);
            $table->string('mdputilisateur', 25);
            $table->integer('estadmin');
            $table->integer('estenattente');
            $table->primary('numutilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
}
