<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthLogin;

class ResetPasswordController extends Controller
{
    public function resetpassword(){

        // $user = AuthLogin::find(['1, 2']);
        // $user = AuthLogin::where('email', $email)->first();

        return view('auth.reset-password');

    }
}
