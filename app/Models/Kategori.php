<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = [
        'id', 'kategori'
    ];


    public function aduan()
    {
        return $this->hasMany(Aduan::class, 'id_kategori');
    }
    public function subkategori()
    {
        return $this->hasMany(Subkategori::class, 'id_kategori');
    }
}
