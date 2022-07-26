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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('nom_Budget');
            $table->double('cout_Unitaire');
            $table->integer('Quantite');
            $table->double('cout_Total');
            $table->double('sous_Total');
            $table->double('total_Somme');
            $table->unsignedBigInteger('id_projet');
            $table->foreign('id_projet')->references('id')->on('projets');
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
        Schema::dropIfExists('budgets');
    }
};
