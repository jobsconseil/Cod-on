<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('idsubjects');
            $table->string('libelle',50);
            $table->text('description');
            $table->integer('resolu');
             $table->integer('idtheme')->unsigned();
            $table->integer('idsubtheme')->unsigned();
            $table->integer('idmembers')->unsigned();
             $table->foreign('idsubtheme')->references('idsubtheme')->on('subtheme');
             $table->foreign('idtheme')->references('idtheme')->on('subtheme');
             $table->foreign('idmembers')->references('idmembers')->on('members');
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
        Schema::dropIfExists('subjects');
    }
}
