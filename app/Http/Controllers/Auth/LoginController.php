<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        return $this->sendLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }

    public function sendLoginResponse(Request $request)
    {

        $ingresoError = array();
        $user = User::where('email', $request['email'])
            ->where('rol_id', 1)
            ->get();

        if (count($user) > 0) {
            if (!is_null($user) && Hash::check($request['password'], $user->first()->password)) {
                $this->guard()->login($user[0]);
                return redirect('/home');
            }
        }

        array_push($ingresoError, "¡Los datos ingresados son incorrectos!");
        return view('admin.login')->with(compact('ingresoError'));
        
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return $this->loggedOut($request) ?: redirect('/');
    }
}
