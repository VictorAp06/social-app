<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicacoes extends Model
{
    protected $table = 'publicacoes';
    
    protected $fillable = [
        'noticia_id',
        'evento_id',
        'dir_img_capa',
        'likes',
        'descricao',
        'user_id',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
