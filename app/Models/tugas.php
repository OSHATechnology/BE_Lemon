<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $guarded = [];

    protected $primaryKey = 'idSiswa';


  
    public function materi()
    {
        return $this->belongsTo(Materi::class, 'idNilai', 'idNilai');
    }

}


