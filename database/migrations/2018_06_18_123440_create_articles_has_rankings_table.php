<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesHasRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_has_rankings', function (Blueprint $table) {
            $table->integer('idarticles')->unsigned();
             $table->integer('idrankings')->unsigned();
               $table->integer('idmembers')->unsigned();
              $table->foreign('idarticles')->references('idarticles')->on('articles');
                $table->foreign('idrankings')->references('idrankings')->on('rankings');
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
        Schema::dropIfExists('articles_has_rankings');
    }
}
