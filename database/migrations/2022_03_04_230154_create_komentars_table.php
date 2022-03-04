<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->longText('komentar');
            $table->unsignedBigInteger('id_aduan')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->foreign('id_aduan')->references('id')->on('aduans')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_admin')->references('id')->on('admins');
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
        Schema::dropIfExists('komentars');
    }
}
