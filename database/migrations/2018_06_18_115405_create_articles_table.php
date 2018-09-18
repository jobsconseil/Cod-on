<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('idarticles');
            $table->string('title',45);
            $table->string('contenu',45);
            $table->integer('status');
            $table->string('picture',50);
             $table->date('dateCreate');
            $table->date('dateUpdate');
            $table->integer('idcategories')->unsigned();
            $table->integer('idmembers')->unsigned();
            $table->foreign('idcategories')->references('idcategories')->on('categories');
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
        Schema::dropIfExists('articles');
    }
}
