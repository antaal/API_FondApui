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
        Schema::create('etats', function (Blueprint $table) {
            $table->id();
            $table->boolean('projet_Etudier');
            $table->dateTime('date_Etude');
            $table->boolean('projet_Evaluer');
            $table->dateTime('date_Evaluation');
            $table->unsignedBigInteger('id_statut');
            $table->foreign('id_statut')->references('id')->on('statut__projets');
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
        Schema::dropIfExists('etats');
    }
};
