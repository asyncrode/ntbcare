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

        'id', 'nama_will',
    ];

    public function aduan()
    {
        return $this->hasMany(Aduan::class, 'id_wil');
    }

    public function opd()
    {
        return $this->hasMany(Opd::class, 'id_wilayah');
    }

    public function kecamatan()
    {
        return $this->hasOne(kecamatan::class, 'id_wilayahs');
    }
}
