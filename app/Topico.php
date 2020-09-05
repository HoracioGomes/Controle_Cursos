<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    public function aula(){
        return $this->belongsTo(Aula::class);
    }

}
