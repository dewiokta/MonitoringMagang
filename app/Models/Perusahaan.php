<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    public function mahasiswa(){
        // return $this->belongsTo('App\Mahasiswa','kodePT','kode_pt');
        return $this->BelongsTo(Mahasiswa::class, 'kodePT');
        // return $this->belongsTo('App\Mahasiswa');
    }
}
