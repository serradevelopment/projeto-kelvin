<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model
{
    use HasFactory;

    protected $fillable = ['email','senha','nome','periodo','curso','nivel','matricula','cpf','data_nascimento'];
    protected $with =   ['endereco'];

    public function endereco(){
        return $this->belongsTo(EstagiariosEndereco::class,'estagiario_id');
    }
}
