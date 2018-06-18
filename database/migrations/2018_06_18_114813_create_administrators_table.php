<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('idadministrators');
             $table->string('privilege',45);
             $table->string('recuperationEmail', 45);
            $table->date('dateCreate','y/m/d h:s');
            $table->date('dateUpdate','y/m/d h:s');
            $table->integer('idusers')->unsigned();
            $table->foreign('idusers')->references('idusers')->on('users');
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
        Schema::dropIfExists('administrators');
    }
}
