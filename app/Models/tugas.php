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
<<<<<<< HEAD
        return $this->belongsTo('App/Models/Materi');
    }

    public function tugasmurid()
    {
        return $this->hasMany('App/Models/TugasMurid');
=======
        return $this->hasOne(Materi::class, 'idMateri', 'idMateri');
>>>>>>> 084164ee91997a716b966fab11fad95d1bd62349
    }

    public function tugasMurid()
    {
        return $this->hasMany(TugasMurid::class, 'idTugas', 'idTugas');
    }
}
