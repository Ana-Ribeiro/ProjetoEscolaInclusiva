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
        Schema::create('projeto', function (Blueprint $table) {
            $table->id();
            $table->string('canal_comunicacao');
            $table->string('nome_projeto');
            $table->string('estado_projeto',9);
            $table->string('estado_arte');
            $table->date('dt_ini');
            $table->date('dt_fim');
            $table->string('equipa');
            $table->string('nome_owner');
            $table->timestamps();

            $table->unsignedBigInteger('estado_id')->unsigned()->nullable();
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('cascade');
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projeto');
    }
};
