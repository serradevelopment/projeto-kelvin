<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estagio extends Model
{
    use HasFactory;

    protected $fillable = ['nome','descricao','status','empresa_id','professor_id','estagiario_id','qtd_horas'];

    public function estagiario(){
        return $this->belongsTo(Estagiario::class);
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function professor(){
        return $this->belongsTo(Professor::class);
    }

    public function tarefas(){
        return $this->hasMany(Tarefa::class);
    }


    public function getHorasConcluidasAttribute(){
        $horas_tarefas = $this->tarefas()->where('empresa_ok',1)->where('professor_ok',1)->where('estagiario_ok',1)->sum('qtd_horas');
        return $horas_tarefas;
    }

    public function getStatusLabelAttribute(){
        if($this->status === 1){
            return '<span class="badge badge-info">Ativo</span>';
        }
        if($this->status === 2){
            return '<span class="badge badge-success">Finalizado</span>';
        }
    }
}
