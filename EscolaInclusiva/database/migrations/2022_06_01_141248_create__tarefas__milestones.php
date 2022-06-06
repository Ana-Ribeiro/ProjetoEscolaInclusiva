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
        Schema::create('tarefas__milestones', function (Blueprint $table) {
          
            $table->timestamps();

            $table->unsignedBigInteger('tarefas_id')->unsigned()->nullable();
            $table->foreign('tarefas_id')->references('id')->on('tarefas')->onDelete('cascade');

            $table->unsignedBigInteger('milestones_id')->unsigned()->nullable();
            $table->foreign('milestones_id')->references('id')->on('milestones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas__milestones');
    }
};
