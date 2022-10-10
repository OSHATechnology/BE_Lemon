<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'idSiswa',
        'nama',
        'email',
        'password',
        'tempat',
        'tgl_lahir',
        'jns_kelamin', ['laki-laki', 'perempuan'],
        'agama',
        'nama_ayah',
        'nama_ibu',
        'alamat',
        'telepon',
        'kd_pos',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'idSiswa';

    // Penting untuk tim lemon!!!
    // Penjelasan : yang di comment ini untuk template pembuatan migration
    // (WAJIB HAPUS COMMENT TEMPLATE JIKA TIDAK DIPAKAI)

    // Jika terdapat relasi one to one, maka pakai kode dibawah ini, untuk relasi selain one to one bisa cek dokumentasi
    // public function nilai()
    // {
    //     return $this->hasOne(Nilai::class, 'idNilai', 'idNilai');
    // }
}
