<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    protected $table = 'subkategoris';
    protected $fillable = [
        'subkategori', 'id_kategori'
    ];


    public function aduan()
    {
        return $this->hasOne(Aduan::class, 'id');

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'id_kategori');

    }
}
