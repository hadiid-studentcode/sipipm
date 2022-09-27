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
            $table->string('fasilitator_pemateri', 200);
            $table->string('fasilitator_pendamping', 200);
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
