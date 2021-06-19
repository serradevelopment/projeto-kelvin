<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professor extends Authenticatable
{
    use HasFactory;

    protected $table = 'professores';
    protected $guard = 'professor';
    protected $fillable = ['nome','email','password','cargo'];

    public function estagios(){
        return $this->hasMany(Estagio::class);
    }

    public function getTarefasPendentesAttribute(){
        $estagios = $this->estagios;
        $tarefas_pendentes = [];
        foreach($estagios as $estagio){
            foreach($estagio->tarefas as $tarefa){
                if($tarefa->empresa_ok === 0){
                    $tarefas_pendentes[] = $tarefa;
                }
            }
        }
        return $tarefas_pendentes;
    }

}
