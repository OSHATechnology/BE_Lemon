<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $guarded = [];

    protected $primaryKey = 'idKelas';

<<<<<<< HEAD

  
    public function siswa()
    {
        return $this->hasMany('App/Models/Siswa');
    }

    public function materi()
    {
        return $this->hasMany('App/Models/Materi');
=======
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'idKelas', 'idKelas');
>>>>>>> 084164ee91997a716b966fab11fad95d1bd62349
    }
}
