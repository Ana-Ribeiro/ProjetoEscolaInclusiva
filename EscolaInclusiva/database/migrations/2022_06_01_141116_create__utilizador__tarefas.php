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
        Schema::create('utilizador__tarefas', function (Blueprint $table) {
            
            $table->timestamps();

            $table->unsignedBigInteger('utilizador_id')->unsigned()->nullable();
            $table->foreign('utilizador_id')->references('id')->on('utilizador')->onDelete('cascade');

            $table->unsignedBigInteger('tarefas_id')->unsigned()->nullable();
            $table->foreign('tarefas_id')->references('id')->on('tarefas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilizador__tarefas');
    }
};
