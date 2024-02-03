<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthLogin;

class AuthController extends Controller
{
    public function index()
    {
        if(auth()->guard('web')->check())
        {
            return redirect()->route('web.dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        // dd($username, $password);

        if(auth()->guard('web')->attempt(['username' =>$username, 'password' =>$password, 'status' => 1]))
        {
            $auth['online'] = 1;
            $auth['login_at'] = \Carbon\Carbon::now();
            // dd($auth);

            AuthLogin::whereId(auth()->guard('web')->id())->update($auth);

        }else{

            return redirect()->route('web.login.index');
        }

        return redirect()->route('web.dashboard');
    }
}
