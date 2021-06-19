<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = ['nome','descricao','data','qtd_horas','estagiario_ok','professor_ok','empresa_ok'];


    public function estagio(){
        return $this->belongsTo(Estagio::class);
    }
}
