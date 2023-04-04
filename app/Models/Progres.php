<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    use HasFactory;
    protected $fillable = ['kd_progres', 'tanggal', 'detail', 'nimmm'];
    public function mahasiswa(){
        // return $this->belongsTo('App\Mahasiswa','kodePT','kode_pt');
        return $this->BelongsTo(Mahasiswa::class, 'nim');
        // return $this->belongsTo('App\Mahasiswa');
    }
}
