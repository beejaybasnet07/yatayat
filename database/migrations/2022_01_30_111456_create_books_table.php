<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('pid')->unsigned();
            $table->foreign('pid')->references('id')->on('register_users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('vid')->unsigned();
            $table->foreign('vid')->references('id')->on('vehicle')->onDelete('cascade')->onUpdate('cascade');
            $table->string('seat');
            $table->string('bording_point');
            $table->string('dropping_point');
            $table->integer('cost');
            $table->date('date');
            $table->integer('status');
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
        Schema::dropIfExists('books');
    }
}
