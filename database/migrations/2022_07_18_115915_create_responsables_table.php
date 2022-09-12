<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
   
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('date_Naissance');
            $table->string('Telephone');
            $table->boolean('Genre');
            $table->string('Numero_identite');
            $table->string('releve_Bancaire');
            $table->string('CNI_recto');
            // $table->string('CNI_verso');
            // $table->String('NINEA_Recepisse');
            $table->enum('type_Representant',
             ['Association', 'Entreprise', 'Individu'])
            // ->default("Individu")
            ;

            $table->unsignedBigInteger('id_quartier');
            $table->foreign('id_quartier')->references('id')->on('quartiers');
            // $table->unsignedBigInteger('users_id');
            // $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables');
    }
};
