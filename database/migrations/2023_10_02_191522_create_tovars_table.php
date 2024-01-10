<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTovarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tovars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('type');
            $table->text('podborka');
            $table->text('nazv');
            $table->text('obem');
            $table->text('col');
            $table->text('opis');
            $table->text('photo');
            $table->integer('price');
            $table->text('poboch');
            $table->text('obchs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tovars');
    }
}
