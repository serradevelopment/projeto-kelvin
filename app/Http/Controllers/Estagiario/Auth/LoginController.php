<?php

namespace App\Http\Controllers\Estagiario\Auth;

use App\Models\Coordenador;
use App\Models\Estagiario;
use App\Models\EstagiariosEndereco;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function register(Request $request ){
        $data = $request->all();
        $estagiario = new Estagiario();
        $estagiario->fill($data);
        $estagiario->password = Hash::make($request->password);
        $estagiario->save();

        $estagiario_endereco = new EstagiariosEndereco();
        $estagiario_endereco->fill($data);
        $estagiario_endereco->estagiario_id = $estagiario->id;
        $estagiario_endereco->save();
        return redirect()->route('estagiarios.auth.login');
    }
    /**
     * Show the register form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm()
    {
        return view('estagiarios.auth.register');
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('estagiarios.auth.login');
    }

    /**
     * Login the admin.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' =>  'required',
            'password'=>'required'
        ])->validate();
        if(Auth::guard('estagiario')->attempt($request->only('email','password') )){
            //Authentication passed...
            return redirect()->to('/estagiario');
        }


        return redirect()->route('estagiarios.auth.login');
    }

    /**
     * Logout the admin.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        //logout the admin...
    }

    /**
     * Validate the form data.
     *
     * @param \Illuminate\Http\Request $request
     * @return
     */
    private function validator(Request $request)
    {
        //validate the form...
    }

    /**
     * Redirect back after a failed login.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed()
    {
        //Login failed...
    }
}
