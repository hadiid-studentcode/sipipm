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
        Schema::create('preposttest', function (Blueprint $table) {
            $table->id();
            $table->enum('test',['pre','post']);
            $table->foreignId('idmateri')->references('id')->on('bank_materi')->onDelete('cascade')->onUpdate('cascade');;
            $table->string('link');
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
        Schema::dropIfExists('preposttest');
    }
};
