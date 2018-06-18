<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('idtags');
            $table->string('libelle',50);
            $table->string('picture',50);
            $table->date('dateCreate','y/m/h h:s');
            $table->date('dateUpdate','y/m/d h:s');
            $table->integer('idmembers')->unsigned();
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
        Schema::dropIfExists('tags');
    }
}
