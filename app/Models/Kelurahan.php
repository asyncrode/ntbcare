<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'kelurahans';
    protected $fillable = [
        'id','nama_kel','id_kecamatans'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class,'id_kecamatans');
    }
}
