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
        Schema::create('risques', function (Blueprint $table) {
            $table->id();
            $table->string('nom_Risque');
            $table->String('risque_Identifier');
            $table->unsignedBigInteger('id_activite');
            $table->foreign('id_activite')->references('id')->on('activites');
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
        Schema::dropIfExists('risques');
    }
};
