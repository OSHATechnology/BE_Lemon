<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;
    protected $table = 'mata_pelajarans';
    protected $guarded = [];

    protected $primaryKey = 'idMapel';

<<<<<<< HEAD

  
    public function tugas()
    {
        return $this->hasMany('App/Models/Tugas');
=======
    public function materi()
    {
        return $this->hasMany(MataPelajaran::class, 'idMapel', 'idMapel');
>>>>>>> 084164ee91997a716b966fab11fad95d1bd62349
    }
}
