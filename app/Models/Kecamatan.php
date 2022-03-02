<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'kecamatans';
    protected $fillable = [
        'id','nama_kec','id_wilayahs'
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class,'id_wilayahs');
    }

    public function kelurahan()
    {
        return $this->hasOne(Kelurahan::class,'id');
    }
}
