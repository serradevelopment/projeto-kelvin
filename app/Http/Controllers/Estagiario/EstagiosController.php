<?php

namespace App\Http\Controllers\Estagiario;

use App\Http\Controllers\Controller;
use App\Models\Estagio;
use Illuminate\Http\Request;

class EstagiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('estagiarios.estagios.index',[
            'estagios'  =>  auth()->guard('estagiario')->user()->estagios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estagio  $estagio
     * @return \Illuminate\Http\Response
     */
    public function show(Estagio $estagio)
    {
        return view('estagiarios.estagios.show',[
            'estagio'   =>  $estagio
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
