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


  
    public function tugas()
    {
        return $this->hasMany('App/Models/Tugas');
    }
}
