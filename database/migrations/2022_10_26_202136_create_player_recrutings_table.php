<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerRecrutingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_recrutings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('recruting_title');
            $table->integer('recruting_category');
            $table->string('venue');
            $table->dateTime('from_datetime');
            $table->dateTime('to_datetime');
            $table->integer('sex');
            $table->integer('min_age');
            $table->integer('max_age');
            $table->integer('game_history');
            $table->integer('game_type_tori');
            $table->integer('game_type_sdm');
            $table->integer('shuttle_bringing');
            $table->integer('entry_fee');
            $table->text('mood');
            $table->text('note');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_recrutings');
    }
}
