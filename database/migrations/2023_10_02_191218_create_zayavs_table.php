<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZayavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zayavs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('idt');
            $table->text('fio');
            $table->text('nomer');
            $table->text('city');
            $table->integer('summ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zayavs');
    }
}
