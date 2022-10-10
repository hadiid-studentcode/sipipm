<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_belajar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_nama_peserta')->references('id')->on('peserta')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_materi')->references('id')->on('materi')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('pre',['A','B','C','D','E']);
            $table->integer('nominal');
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
        Schema::dropIfExists('hasil_belajar');
    }
};
