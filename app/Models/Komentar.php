<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentars';
    protected $fillable = [
        'komentar', 'id_aduan', 'id_user', 'id_admin'
    ];

    public function aduan()
    {
        return $this->belongsTo(Aduan::class,'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}
