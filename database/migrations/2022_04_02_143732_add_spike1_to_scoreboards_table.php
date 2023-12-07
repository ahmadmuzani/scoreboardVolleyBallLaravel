<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpike1ToScoreboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scoreboards', function (Blueprint $table) {
            //
            $table->integer('spike1');
            $table->integer('spike2');
            $table->integer('block1');
            $table->integer('block2');
            $table->integer('serve1');
            $table->integer('serve2');
            $table->integer('opponent1');
            $table->integer('opponent2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scoreboards', function (Blueprint $table) {
            //
        });
    }
}
