<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mhs_memiliki_tugas extends Model
{
    protected $table = 'mhs_memiliki_tugas';

    protected $fillable = ['nilai', 'komentar'];
}
