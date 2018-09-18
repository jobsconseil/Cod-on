<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('idposts');
            $table->string('content',50);
           $table->date('datePosts');
            $table->date('dateUpdate');
               $table->integer('idtheme')->unsigned();
            $table->integer('idsubtheme')->unsigned();
            $table->integer('idmembers')->unsigned();
             $table->integer('idsubjects')->unsigned();
             $table->foreign('idsubtheme')->references('idsubtheme')->on('subjects');
             $table->foreign('idtheme')->references('idtheme')->on('subjects');
             $table->foreign('idmembers')->references('idmembers')->on('members');
              $table->foreign('idsubjects')->references('idsubjects')->on('subjects');
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
        Schema::dropIfExists('posts');
    }
}
