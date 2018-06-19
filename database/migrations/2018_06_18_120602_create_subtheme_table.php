<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubthemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtheme', function (Blueprint $table) {
            $table->increments('idsubtheme');
            $table->string('libelle',50);
            $table->text('description');
             $table->date('dateCreate','y/m/h h:s');
            $table->date('dateUpdate','y/m/d h:s');
              $table->integer('idtheme')->unsigned();
               $table->integer('idadministrators')->unsigned();
                $table->foreign('idtheme')->references('idtheme')->on('theme');
            $table->foreign('idadministrators')->references('idadministrators')->on('administrators');
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
        Schema::dropIfExists('subtheme');
    }
}
