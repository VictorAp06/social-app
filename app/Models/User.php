<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';
    protected $fillable = [
        'firstname',
        'last_name',
        'data_nascimento',
        'cpf',
        'email',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
