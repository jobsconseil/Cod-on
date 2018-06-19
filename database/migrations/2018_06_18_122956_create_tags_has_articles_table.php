<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsHasArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_has_articles', function (Blueprint $table) {
             $table->integer('idtags')->unsigned();
               $table->integer('idarticles')->unsigned();
              $table->foreign('idtags')->references('idtags')->on('tags');
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
        Schema::dropIfExists('tags_has_articles');
    }
}
