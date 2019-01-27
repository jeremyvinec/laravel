<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_episode', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->foreign('actor_id')->references('id')->on('actors');

            $table->integer('epidode_id')->unsigned();
            $table->foreign('epidsode_id')->references('id')->on('episodes');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_episode');
    }
}
