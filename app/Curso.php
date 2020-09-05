<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
public $timestamps = false;    
protected $table  = 'cursos';
protected $fillable = ['nome'];

public function aulas(){
    return $this->hasMany(Aula::class);
}
}
