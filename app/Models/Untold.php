<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Untold extends Model
{
    protected $table = 'untolds';
    protected $fillable = [
        'judul', 'shortdesc', 'description','views'
    ];
}
