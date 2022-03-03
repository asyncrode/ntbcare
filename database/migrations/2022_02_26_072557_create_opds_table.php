<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_admin');
            $table->char('id_wilayah');
            $table->string('nama');
            $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('id_wilayah')->references('id')->on('wilayahs')->onDelete('cascade');
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
        Schema::dropIfExists('opds');
    }
}
