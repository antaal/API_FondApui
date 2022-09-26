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
            $table->bigIncrements('id');
            $table->string('titre');
            $table->text('image')->nullable();
            $table->string('description');
            $table->dateTime('date_Lancement');
            $table->dateTime('fin_Depot');
            $table->string('secteurs');
            // $table->unsignedBigInteger('secteur_id')->nullable();
            // $table->foreign('secteur_id')->references('id')->on('secteurs');
            // $table->unsignedBigInteger('administrateur_id');
            // $table->foreign('administrateur_id')
            // ->references('id')
            // ->on('administrateurs')->nullable();
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
