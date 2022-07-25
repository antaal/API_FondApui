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
        Schema::create('beneficiaires', function (Blueprint $table) {
            $table->id('id_beneficiaire');
            $table->string('profil_Beneficiaire');
            $table->integer('Nombre');
            $table->unsignedBigInteger('id_statut');
            $table->foreign('id_statut')->references('id_statut')->on('statuts');
            $table->unsignedBigInteger('id_projet');
            $table->foreign('id_projet')->references('id_projet')->on('projets');
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
        Schema::dropIfExists('beneficiaires');
    }
};