<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
    public function topicos(){
        return $this->hasMany(Topico::class);
    }
}
