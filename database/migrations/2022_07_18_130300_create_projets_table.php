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
            $table->string('Description_General');
            $table->string('description_Objectif');
            $table->boolean('autre_Financement_Fond');
            $table->dateTime('date_Autre_Financement');
            $table->double('subvention_Sollicitee');
            $table->double('somme_Autre_Soutien');
            $table->double('total_Budget');
            $table->double('apport_Personnel');
            $table->unsignedBigInteger('id_offre');
            $table->foreign('id_offre')->references('id')->on('offres');
            $table->unsignedBigInteger('id_responsable');
            $table->foreign('id_responsable')->references('id')->on('responsables');
            $table->String('description_Activite');
            $table->String('risque_Identifier');
            $table->String('description_Resultat');

            // $table->unsignedBigInteger('id_etat');
            // $table->foreign('id_etat')->references('id')->on('etats');
            $table->boolean('projet_Etudier')->nullable()->default(false);
            $table->dateTime('date_Etude')->nullable();
            $table->boolean('projet_Evaluer')->nullable()->default(false);
            $table->dateTime('date_Evaluation')->nullable();
            $table->enum('statut__projets', ['En Attente', 'En Cours', 'Terminé'])->nullable()->default("en attente");

            $table->timestamps();
            //--------------------
            // $table->enum('status', ['en attente', 'en cours', 'termine'])->nullable()->default("en attente");
            // $table->boolean('is_approved')->nullable()->default(null);
            // $table->dateTime('date_validation');
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
