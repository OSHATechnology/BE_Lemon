<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materis';
    protected $guarded = [];

    protected $primaryKey = 'idMateri';


  
    public function matapelajaran()
    {
        return $this->belongsTo('App/Models/MataPelajaran');
    }

    public function kelas()
    {
        return $this->belongsTo('App/Models/Kelas');
    }

}
