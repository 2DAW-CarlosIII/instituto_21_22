<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaNotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('materia_id');
            $table->integer('evaluacion');
            $table->integer('notas');
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
        Schema::dropIfExists('notas');
    }
}
