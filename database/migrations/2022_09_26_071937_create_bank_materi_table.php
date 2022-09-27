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
        Schema::create('bank_materi', function (Blueprint $table) {
            $table->id();
            $table->enum('silabus', ['MABICA,', 'LDPR', 'TM 1', 'TM 2', 'TM 3', 'PFP 1', 'PFP 2']);
            $table->text('standar_kompetensi');
            $table->text('kompetensi_dasar');
            $table->text('indikator');
            $table->string('materi', 200);
            $table->string('detailMateri', 200);
            $table->text('strategi_pembelajaran');
            $table->integer('sks');
            $table->text('referensi_acuan');
            $table->text('penilaian');
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
        Schema::dropIfExists('bank_materi');
    }
};
