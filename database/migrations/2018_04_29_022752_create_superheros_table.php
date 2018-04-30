<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperherosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superheros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('nomereal');
            $table->text('descricao');
            $table->string('superpoderes');
            $table->string('frasecomercial');
            $table->string('images');
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
        Schema::dropIfExists('superheros');
    }
}
