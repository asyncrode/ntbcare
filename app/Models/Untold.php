<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Untold extends Model
{
    protected $table = 'untolds';
    protected $fillable = [
        'judul', 'shortdesc', 'description', 'views'
    ];

    public function gambar()
    {
        return $this->hasMany(UntoldGambar::class, 'id');
    }

    public function video()
    {
        return $this->hasMany(UntoldVideo::class, 'id');
    }
}
