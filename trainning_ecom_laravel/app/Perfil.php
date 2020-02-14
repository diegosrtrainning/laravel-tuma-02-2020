<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfis';    
    protected $fillable = ['nome'];
     // Desabilita a criação das colunas created_at e updates_at
    // protected $timestamps = false;
}
