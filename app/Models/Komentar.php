<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentars';
    protected $fillable = [
        'komentar','id_aduan','id_user','id_admin'
    ];

    public function aduan()
    {

    }

    public function user()
    {

    }

    public function admin()
    {
        
    }
}
