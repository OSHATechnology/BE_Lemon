<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $guarded = [];

    protected $fillable = [
        'idSiswa',
        'nama',
        'nisn',
        'email',
        'password',
        'tempat',
        'tgl_lahir',
        'jns_kelamin',
        'agama',
        'alamat',
        'telepon',
        'kd_pos',
        'created_at',
        'updated_at',
    ];


    protected $primaryKey = 'idGuru';


  
   
}
