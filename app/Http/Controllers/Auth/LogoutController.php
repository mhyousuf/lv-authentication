<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthLogin;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $auth['online']          = 0;
        $auth['logout_at']       = \Carbon\Carbon::now();

        AuthLogin::whereId(auth()->guard('web')->id())->update($auth);

        auth()->guard('web')->logout();
        return redirect()->route('web.login.index');
    }
}
