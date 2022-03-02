<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    protected $table = 'opds';
    protected $fillable = [
        'id_admin', 'nama'
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
        return $this->hasOne(Wilayah::class, 'id');

    }
}
