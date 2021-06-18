<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresasEndereco extends Model
{
    use HasFactory;
    protected $table = 'empresas_enderecos';
    protected $fillable = ['endereco', 'cidade', 'cep', 'uf', 'bairro', 'telefone', 'estagiario_id'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
