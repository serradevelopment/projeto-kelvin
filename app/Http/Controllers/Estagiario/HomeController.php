<?php

namespace App\Http\Controllers\Estagiario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('estagiarios.home');
    }
}
