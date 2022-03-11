<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UntoldGambar extends Model
{
    protected $table = 'untold_gambars';
    protected $fillable = [
        'gambar', 'id_untold'
    ];

    public function untold()
    {
        return $this->belongsTo(Untold::class,'id');
    }
}
