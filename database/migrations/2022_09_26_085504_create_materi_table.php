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
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->date('hari');
            $table->time('waktu_dari');
            $table->time('waktu_sampai');
            $table->foreignId('idMateri')->references('id')->on('bank_materi')->onDelete('cascade')->onUpdate('cascade');
            $table->string('PenanggungJawab','100');
            $table->string('fasilitator_pemateri')->nullable();
            $table->string('fasilitator_pendamping')->nullable();
            $table->enum('status', ['Selesai', 'Belum Selesai']);
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
        Schema::dropIfExists('materi');
    }
};
