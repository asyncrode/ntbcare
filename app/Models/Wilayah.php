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

        'nama_will', 'id_opd'
    ];

    public function aduan()
    {
        return $this->hasOne(Aduan::class, 'id');

       'id','nama_will','id_opd'
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }

    public function kecamatan()
    {
        return $this->hasOne(kecamatan::class,'id');

    }
}
