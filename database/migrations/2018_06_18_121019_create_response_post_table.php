<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_post', function (Blueprint $table) {
            $table->increments('idresponse_post');
            $table->string('content',50);
            $table->integer('idmembers')->unsigned();
            $table->integer('idposts')->unsigned();
            $table->foreign('idmembers')->references('idmembers')->on('members');
            $table->foreign('idposts')->references('idposts')->on('posts');
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
        Schema::dropIfExists('response_post');
    }
}
