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
        // Penting untuk tim lemon!!!
        // Penjelasan : yang di comment ini untuk template pembuatan migration
        // (WAJIB HAPUS COMMENT TEMPLATE JIKA TIDAK DIPAKAI) 
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('idSiswa');
            // kode dibawah jika memiliki relasi sesuai dengan field rancangan database
            // $table->unsignedBigInteger('idNilai');
            // $table->unsignedBigInteger('idMapel');
            // $table->unsignedBigInteger('idAbsensi');
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->enum('jns_kelamin', ['laki-laki', 'perempuan']);
            $table->string('agama');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->text('alamat');
            $table->string('telepon');
            $table->string('kd_pos');
            $table->timestamps();

            // Kode agar dapat berelasi dengan table lain
            
            // $table->foreign('A')->references('B')->on('C')

            // Keterangan :
            // - A (field yang memiliki relasi dengan table lain)
            // - B (field table sumber yang menjadi relasi)
            // - C (nama table yang menjadi sumber relasi)
            // ex : $table->foreign('idNilai')->references('idNilai')->on('nilas') 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
