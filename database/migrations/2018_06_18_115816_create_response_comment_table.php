<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponseCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_comment', function (Blueprint $table) {
            $table->increments('idresponse_comment');
            $table->text('content');
             $table->date('datePosts','y/m/h h:s');
            $table->date('dateUpdate','y/m/d h:s');
             $table->integer('idmembers')->unsigned();
             $table->integer('idcomments')->unsigned();
            $table->foreign('idmembers')->references('idmembers')->on('members');
             $table->foreign('idcomments')->references('idcomments')->on('comments');
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
        Schema::dropIfExists('response_comment');
    }
}
