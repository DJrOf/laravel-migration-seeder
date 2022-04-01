<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione di Partenza');
            $table->string('Stazione d\'Arrivo');
            $table->time('Partenza');
            $table->time('Arrivo');
            $table->string('Codice Treno Numero');
            $table->tinyInteger('Carrozze');
            $table->boolean('In Orario');
            $table->boolean('Cancellato');
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
        Schema::dropIfExists('trains');
    }
}
