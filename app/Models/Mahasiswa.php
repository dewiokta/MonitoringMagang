<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    

    public function kampus(){ 
        // return $this->hasMany('App\Kampus'); 
        // return $this->hasMany('App\Kampus','nipp','nip');
        return $this->hasMany(Kampus::class, 'nipp', 'nip');
    }
    public function perusahaan(){
        // return $this->hasMany('App\Perusahaan');
        // return $this->hasMany('App\Perusahaan','kode_pt','kodePT');
        return $this->hasMany(Perusahaan::class, 'kode_pt','kodePT');
    }
    
}
