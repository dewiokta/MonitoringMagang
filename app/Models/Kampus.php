<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;
    

    public function mahasiswa(){
        // return $this->belongsTo('App\Mahasiswa','nipp','nip');
        // return $this->belongsTo('App\Mahasiswa');
        return $this->belongsTo(Mahasiswa::class, 'nipp','nip');
    }
    
}

