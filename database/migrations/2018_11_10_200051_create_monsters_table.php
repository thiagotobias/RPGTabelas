<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cr');
            $table->string('size');
            $table->string('type');
            $table->string('subtype');
            $table->integer('hd');
            $table->string('al',2);
            $table->string('clime');
            $table->string('environment');
            $table->string('home_plane');
            $table->integer('page');
            $table->string('book');

            $table->integer('system_id')->unsigned();
            $table->foreign('system_id')->references('id')->on('systems')->onDelete('cascade');

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
        Schema::dropIfExists('monsters');
    }
}
