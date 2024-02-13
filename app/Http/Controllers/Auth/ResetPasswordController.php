<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthLogin;

class ResetPasswordController extends Controller
{
    public function resetpassword($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }
}
