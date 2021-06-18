<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\EmpresasEndereco;
use App\Models\Estagiario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmpresasController extends Controller
{
    public function registerForm()
    {
        return view('cadastro-empresa');
    }

    public function register(Request $request)
    {
        $data = $request->all();
        $empresa = new Empresa();
        $empresa->fill($data);
        $empresa->senha = Hash::make($data['password']);
        $empresa->save();

        $endereco = new EmpresasEndereco();
        $endereco->fill($data);
        $endereco->empresa_id = $empresa->id;
        $endereco->save();

        return redirect()->back()->with('success', 'Empresa cadastrada com sucesso.');
    }

/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public
function index()
{
    //
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public
function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */
public
function store(Request $request)
{
    //
}

/**
 * Display the specified resource.
 *
 * @param \App\Models\Empresa $empresa
 * @return \Illuminate\Http\Response
 */
public
function show(Empresa $empresa)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param \App\Models\Empresa $empresa
 * @return \Illuminate\Http\Response
 */
public
function edit(Empresa $empresa)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @param \App\Models\Empresa $empresa
 * @return \Illuminate\Http\Response
 */
public
function update(Request $request, Empresa $empresa)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param \App\Models\Empresa $empresa
 * @return \Illuminate\Http\Response
 */
public
function destroy(Empresa $empresa)
{
    //
}
}
