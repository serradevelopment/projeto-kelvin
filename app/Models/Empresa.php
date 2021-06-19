<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empresa extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['cnpj','razao_social','password','email','inscricao_estadual','cargo','representante_empresa'];
    protected $table = 'empresas';
    protected $guard = 'empresa';
}
