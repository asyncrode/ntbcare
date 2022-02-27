<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aduans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_subkategori');
            $table->unsignedBigInteger('id_pelapor');
            $table->char('id_wil');
            $table->char('id_kec');
            $table->char('id_kel');
            $table->unsignedBigInteger('id_opd')->nullable();
            $table->string('alamat');
            $table->string('bukti');
            $table->string('bukti_2');
            $table->longText('pesan');
            $table->enum('status',['on process','pending','approved','completed','rejected'])->nullable();
            $table->enum('priority',['biasa','penting','segera'])->nullable();
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade');
            $table->foreign('id_subkategori')->references('id')->on('subkategoris')->onDelete('cascade');
            $table->foreign('id_pelapor')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_wil')->references('id')->on('wilayahs')->onDelete('cascade');
            $table->foreign('id_kec')->references('id')->on('kecamatans')->onDelete('cascade');
            $table->foreign('id_kel')->references('id')->on('kelurahans')->onDelete('cascade');
            $table->foreign('id_opd')->references('id')->on('opds')->onDelete('cascade');
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
        Schema::dropIfExists('aduans');
    }
}
