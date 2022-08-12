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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom_Projet');
            $table->string('objet_Projet');
            $table->integer('duree_Execution');
            $table->dateTime('debut_Execution');
            $table->dateTime('fin_Execution');
            $table->string('zone_Execution');
            $table->string('Contexte');
            $table->string('Innovation');
            $table->longText('Resume');
            $table->string('Objectif_General');
            $table->string('Description_General');
            $table->string('indicateur_Performance');
            $table->boolean('autre_Financement_Fond');
            $table->dateTime('date_Autre_Financement');
            $table->double('subvention_Sollicitee');
            $table->double('somme_Autre_Soutien');
            $table->double('total_Budget');
            $table->unsignedBigInteger('id_offre');
            $table->foreign('id_offre')->references('id')->on('offres');
            $table->unsignedBigInteger('id_responsable');
            $table->foreign('id_responsable')->references('id')->on('responsables');
            $table->unsignedBigInteger('id_etat');
            $table->foreign('id_etat')->references('id')->on('etats');
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
        Schema::dropIfExists('projets');
    }
};
