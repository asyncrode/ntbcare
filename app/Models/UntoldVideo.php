<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UntoldVideo extends Model
{
    protected $table = 'untold_videos';
    protected $fillable = [
        'video', 'id_untold'
    ];

    public function untold()
    {
        return $this->belongsTo(Untold::class, 'id_untold');
    }
}
