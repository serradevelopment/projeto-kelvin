<?php

namespace App\Http\Controllers\Estagiario;

use App\Http\Controllers\Controller;
use App\Models\Estagio;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Estagio $estagio)
    {
        return view('estagiarios.estagios.tarefas.index',[
            'estagio'   =>  $estagio
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Estagio $estagio)
    {
        return view('professores.estagios.tarefas.create',[
            'estagio'   =>  $estagio
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Estagio $estagio)
    {
        $tarefa = new Tarefa();
        $tarefa->fill($request->all());
        $tarefa->estagio_id = $estagio->id;
        $tarefa->save();

        return redirect()->route('coordenador.estagios.tarefas.index',$estagio);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Estagio $estagio ,Tarefa $tarefa)
    {
        $tarefa->estagiario_ok = (int)!$tarefa->estagiario_ok;

        $tarefa->save();
        return redirect()->route('estagiarios.estagios.tarefas.index',$estagio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
