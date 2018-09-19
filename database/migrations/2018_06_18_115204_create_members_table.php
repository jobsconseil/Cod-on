<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('idmembers');
            $table->string('name',45);
            $table->string('bio',45);
            $table->string('location',45);
            $table->string('jobs',50);
            $table->string('recuperationEmail',50);
            $table->date('dateCreate');
            $table->date('dateUpdate');
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
        Schema::dropIfExists('members');
    }
}
