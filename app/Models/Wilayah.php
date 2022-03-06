<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'wilayahs';
    protected $fillable = [

        'id','nama_will',
    ];

    public function aduan()
    {
        return $this->hasOne(Aduan::class, 'id');

    }

    public function opd()
    {
        return $this->hasMany(Opd::class, 'id');
    }

    public function kecamatan()
    {
        return $this->hasOne(kecamatan::class,'id');

    }
}
