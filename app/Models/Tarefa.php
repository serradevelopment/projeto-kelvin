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

    public function getEmpresaOkLabelAttribute(){
        if($this->empresa_ok ===1){
            return '<span class="badge badge-success">Verificado</span>';
        }
        return '<span class="badge badge-danger">Não Verificado</span>';
    }

    public function getProfessorOkLabelAttribute(){
        if($this->professor_ok ===1){
            return '<span class="badge badge-success">Verificado</span>';
        }
        return '<span class="badge badge-danger">Não Verificado</span>';
    }

    public function getEstagiarioOkLabelAttribute(){
        if($this->estagiario_ok ===1){
            return '<span class="badge badge-success">Verificado</span>';
        }
        return '<span class="badge badge-danger">Não Verificado</span>';
    }
}
