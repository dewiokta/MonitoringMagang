<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    public function mahasiswa(){
        // return $this->belongsTo('App\Mahasiswa','kodePT','kode_pt');
        return $this->belongsTo(Mahasiswa::class, 'kodePT','kode_pt');
        // return $this->belongsTo('App\Mahasiswa');
    }
    
}
