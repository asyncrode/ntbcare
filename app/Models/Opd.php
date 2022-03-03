<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    protected $table = 'opds';
    protected $fillable = [
        'id_admin','id_wilayah', 'nama'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }


    public function aduan()
    {
        return $this->hasOne(Aduan::class, 'id');
    }

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'id_wilayah');

    }
}
