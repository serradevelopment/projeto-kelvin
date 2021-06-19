<?php

namespace App\Http\Controllers\Coordenador;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\EmpresasEndereco;
use App\Models\Estagiario;
use App\Models\Estagio;
use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EstagiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coordenadores.estagios.index',[
            'estagios'  =>  Estagio::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('coordenadores.estagios.create',[
            'estagiarios'   =>  Estagiario::all(),
            'empresas'   =>  Empresa::all(),
            'professores'   =>  Professor::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $estagio = new Estagio();
        $estagio->fill($data);
        $estagio->save();
        return redirect()->route('coordenador.estagios.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estagio  $estagio
     * @return \Illuminate\Http\Response
     */
    public function show(Estagio $estagio)
    {
//        $data = [];
//        $pdf = \PDF::loadView('pdf.termo', $data);
//        $pdf->setOptions(['isRemoteEnabled' => false ,'isJavascriptEnabled'=>false]);
//        return $pdf->stream();
        return view('coordenadores.estagios.show',[
            'estagio'  =>  $estagio
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estagio  $estagio
     * @return \Illuminate\Http\Response
     */
    public function edit(Estagio $estagio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estagio  $estagio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estagio $estagio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estagio  $estagio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estagio $estagio)
    {
        //
    }
}
