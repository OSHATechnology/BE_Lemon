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
            $table->enum('status', ['selesai', 'belum selesai']);
            $table->timestamps();
        });

        Schema::table('tugas_murids', function (Blueprint $table) {
            $table->foreign('idTugas')->references('id')->on('tugas');
            $table->foreign('idSiswa')->references('idSiswa')->on('siswas');
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
