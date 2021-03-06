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

    public function estagios(){
        return $this->hasMany(Estagio::class);
    }
    public function getTarefasPendentesAttribute(){
        $estagios = $this->estagios;
        $tarefas_pendentes = [];
        foreach($estagios as $estagio){
            foreach($estagio->tarefas as $tarefa){
                if($tarefa->empresa_ok === 0 || $tarefa->professor_ok === 0 || $tarefa->estagiario_ok === 0 ){
                    $tarefas_pendentes[] = $tarefa;
                }
            }
        }
        return $tarefas_pendentes;
    }
}
