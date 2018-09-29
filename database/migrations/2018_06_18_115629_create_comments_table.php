<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('idcomments');
            $table->text('content');
              $table->integer('idarticles')->unsigned();
            $table->integer('idmembers')->unsigned();
             $table->integer('idcategories')->unsigned();
            $table->foreign('idcategories')->references('idcategories')->on('articles');
             $table->foreign('idmembers')->references('idmembers')->on('members');
              $table->foreign('idarticles')->references('idarticles')->on('articles');
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
        Schema::dropIfExists('comments');
    }
}
