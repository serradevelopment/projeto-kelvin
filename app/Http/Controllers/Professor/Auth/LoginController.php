<?php

namespace App\Http\Controllers\Professor\Auth;

use App\Models\Professor;
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
        $professor = new Professor();
        $professor->fill($data);
        $professor->password = Hash::make($request->password);
        $professor->save();

        return redirect()->route('professores.auth.login');
    }
    /**
     * Show the register form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm()
    {
        return view('professores.auth.register');
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('professores.auth.login');
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
        if(Auth::guard('professor')->attempt($request->only('email','password') )){
            //Authentication passed...
            return redirect()->to('/professor');
        }


        return redirect()->route('professores.auth.login');
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
