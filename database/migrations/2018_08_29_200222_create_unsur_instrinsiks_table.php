<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnsurInstrinsiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unsur_instrinsiks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('referensi_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('tema');
            $table->string('tokoh');
            $table->string('alur');
            $table->string('latar');
            $table->string('amanat');
            $table->timestamps();

            $table->foreign('referensi_id')->references('id')->on('referensis')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unsur_instrinsiks');
    }
}
