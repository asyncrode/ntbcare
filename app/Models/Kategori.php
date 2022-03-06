<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = [
        'kategori'
    ];


    public function aduan()
    {
        return $this->hasOne(Aduan::class, 'id');
    }
    public function subkategori()
    {
        return $this->hasMany(Subkategori::class,'id');

    }
}
