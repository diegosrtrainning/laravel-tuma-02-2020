<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends User
{
    public function perfil(){
        return $this->belongsTo(Perfil::class);
    }

   public function user(){
       return $this->belongsTo(User::class);
   }


}
