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
            $table->dateTime('date_Naissance');
            $table->string('Telephone');
            $table->boolean('Genre');
            $table->string('Numero_identite');
            $table->string('releve_Bancaire');
            $table->string('CNI_recto');
            $table->string('CNI_verso');
            $table->unsignedBigInteger('id_quartier');
            $table->foreign('id_quartier')->references('id')->on('quartiers');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
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
