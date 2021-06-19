<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Estagiario extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['email','password','nome','periodo','curso','nivel','matricula','cpf','data_nascimento'];
    protected $with =   ['endereco'];
    protected $guard = 'estagiario';

    public function endereco(){
        return $this->belongsTo(EstagiariosEndereco::class,'estagiario_id');
    }
}
