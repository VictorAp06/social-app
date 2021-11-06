<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $timestamps = false;

    protected $table = 'user';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'data_nascimento',
        'cpf',
        'email',
        'password',
    ];

}
