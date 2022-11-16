<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeToDatetimeColumnOfPlayerRecrutingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_recrutings', function (Blueprint $table) {
            $table->date('to_datetime')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_recrutings', function (Blueprint $table) {
            $table->datetime('to_datetime')->change();
        });
    }
}
