<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahans';
    protected $fillable = [
        'nama_kel','id_kecamatans'
    ];
}
