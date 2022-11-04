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
        Schema::create('tugas_murids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idTugas');
            $table->unsignedBigInteger('idSiswa');
            $table->string('file');
            $table->string('nilai');
            $table->boolean('selesai');
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
        Schema::dropIfExists('tugas_murids');
    }
};
