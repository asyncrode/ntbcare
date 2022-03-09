<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUntoldVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('untold_videos', function (Blueprint $table) {
            $table->id();
            $table->string('video');
            $table->unsignedBigInteger('id_untold');
            $table->foreign('id_untold')->references('id')->on('untolds')->onDelete('cascade');
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
        Schema::dropIfExists('untold_videos');
    }
}
