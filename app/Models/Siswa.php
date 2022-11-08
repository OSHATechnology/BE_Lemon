<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Siswa extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'idSiswa',
        'idKelas',
        'nama',
        'nisn',
        'email',
        'password',
        'tempat',
        'tgl_lahir',
        'jns_kelamin',
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

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'idKelas', 'idKelas');
    }

    public function tugasMurid()
    {
        return $this->hasMany(TugasMurid::class, 'idSiswa', 'idSiswa');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
