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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->dateTime('date_Lancement');
            $table->dateTime('fin_Depot');
            $table->unsignedBigInteger('id_secteur');
            $table->foreign('id_secteur')->references('id')->on('secteurs');
            $table->unsignedBigInteger('id_administrateur');
            $table->foreign('id_administrateur')->references('id')->on('administrateurs');
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
        Schema::dropIfExists('offres');
    }
};
