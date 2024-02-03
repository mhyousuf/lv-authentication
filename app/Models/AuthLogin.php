<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthLogin extends Authenticatable
{
    use HasFactory,
        Notifiable;

    protected $table = 'web_users';

    protected $fillable = [
        'role',
        'name',
        'email',
        'phone',
        'nid',
        'birth_date',
        'username',
        'password',
        'country',
        'state',
        'city',
        'zip_code',
        'address',
        'login_at',
        'logout_at',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
    ];
}
