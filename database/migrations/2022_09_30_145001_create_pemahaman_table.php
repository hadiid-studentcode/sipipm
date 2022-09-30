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
        Schema::create('pemahaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_peserta')->references('id')->on('peserta')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_materi')->references('id')->on('materi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_fasilitator')->references('id')->on('fasilitator')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('n_preTest');
            $table->integer('n_postTest');

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
        Schema::dropIfExists('pemahaman');
    }
};
