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
            $table->string('hari', 50);
            $table->time('waktu_dari');
            $table->time('waktu_sampai');
            $table->foreignId('idMateri')->references('id')->on('bank_materi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_fasilitator_pemateri')->nullable()->references('id')->on('fasilitator')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_fasilitator_pendamping')->nullable()->references('id')->on('fasilitator')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('status',['Selesai','Belum Selesai']);
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
