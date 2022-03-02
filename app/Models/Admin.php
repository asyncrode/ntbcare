<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class Admin extends Authenticable
{
    use Notifiable;
    use HasRoles;

    protected $guard_name = 'admins';

    protected $fillable = [
        'nama', 'email', 'password'
    ];

    protected $hidden = ['password'];

    public function opd()
    {
        return $this->hasOne(Opd::class, 'id');
    }
}
    



