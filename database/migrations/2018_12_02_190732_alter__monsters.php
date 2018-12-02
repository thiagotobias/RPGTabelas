<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMonsters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monsters', function (Blueprint $table) {
            
            $table->text('name')->change();
            $table->string('cr',5)->nullable()->change();
            $table->string('size',10)->nullable()->change();
            $table->text('type')->nullable()->change();
            $table->text('subtype')->nullable()->change();
            $table->string('hd',10)->nullable()->change();
            $table->text('al')->nullable()->change();
            $table->text('clime')->nullable()->change();
            $table->text('environment')->nullable()->change();
            $table->text('home_plane')->nullable()->change();
            $table->integer('page')->nullable()->change();
            $table->text('book')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monsters', function (Blueprint $table) {
            $table->string('name')->change();
            $table->integer('cr')->change();
            $table->string('size')->change();
            $table->string('type')->change();
            $table->string('subtype')->change();
            $table->integer('hd')->change();
            $table->string('al',2)->change();
            $table->string('clime')->change();
            $table->string('environment')->change();
            $table->string('home_plane')->change();
            $table->integer('page')->change();
            $table->string('book')->change();
        });
    }
}
