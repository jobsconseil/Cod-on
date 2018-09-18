<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages_has_user', function (Blueprint $table) {
           $table->integer('idmessages')->unsigned();
               $table->integer('idusers')->unsigned();
              $table->foreign('idmessages')->references('idmessages')->on('messages');
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
        Schema::dropIfExists('messages_has_user');
    }
}
