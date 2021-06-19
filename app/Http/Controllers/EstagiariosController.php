<?php

namespace App\Http\Controllers;

use App\Models\Estagiario;
use App\Models\EstagiariosEndereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EstagiariosController extends Controller
{
    public function registerForm(){
        return view('estagiarios.register-estagiario');
    }
    public function register(Request $request){
        $data = $request->all();
        $estagiario = new Estagiario();
        $estagiario->fill($data);
        $estagiario->senha = Hash::make($data['password']);
        $estagiario->save();

        $endereco = new EstagiariosEndereco();
        $endereco->fill($data);
        $endereco->estagiario_id = $estagiario->id;
        $endereco->save();

        return redirect()->back()->with('success','Estagiario cadastrado com sucesso.');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function show(Estagiario $estagiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function edit(Estagiario $estagiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estagiario $estagiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estagiario $estagiario)
    {
        //
    }
}
