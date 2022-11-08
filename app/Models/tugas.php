<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $guarded = [];

    protected $primaryKey = 'idTugas';


  
    public function materi()
    {
        return $this->belongsTo('App/Models/Materi');
    }

    public function tugasmurid()
    {
        return $this->hasMany('App/Models/TugasMurid');
    }

}


