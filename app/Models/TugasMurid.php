<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasMurid extends Model
{
    use HasFactory;

    // Penting untuk tim lemon!!!
    // Penjelasan : yang di comment ini untuk template pembuatan migration
    // (WAJIB HAPUS COMMENT TEMPLATE JIKA TIDAK DIPAKAI)

    // Jika terdapat relasi one to one, maka pakai kode dibawah ini, untuk relasi selain one to one bisa cek dokumentasi
    public function siswa()
    {
        return $this->belongSTo('App/Models/Siswa');
    }

    public function tugas()
    {
        return $this->belongSTo('App/Models/Tugas');
    }
}
