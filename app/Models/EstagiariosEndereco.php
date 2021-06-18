<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstagiariosEndereco extends Model
{
    use HasFactory;

    protected $table = 'estagiarios_enderecos';
    protected $fillable = ['endereco', 'cidade', 'cep', 'uf', 'bairro', 'telefone', 'estagiario_id'];

    public function estagiario()
    {
        return $this->belongsTo(Estagiario::class);
    }
}
