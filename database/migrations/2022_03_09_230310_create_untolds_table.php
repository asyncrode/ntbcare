<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUntoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('untolds', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->longText('shortdesc')->nullable();
            $table->longText('description')->nullable();
            $table->longText('views');
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
        Schema::dropIfExists('untolds');
    }
}
