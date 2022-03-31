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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->integer('nombre_etage');
            $table->integer('superficie');
            $table->unsignedBigInteger('quartier_id');
            $table->foreign('quartier_id')->references('id')->on('quartiers');
            $table->unsignedBigInteger('proprietaire_id');
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires');
            $table->unsignedBigInteger('typePropriete_id');
            $table->foreign('typePropriete_id')->references('id')->on('type__proprietes');
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
        Schema::dropIfExists('proprietes');
    }
};
