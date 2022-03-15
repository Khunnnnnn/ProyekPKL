<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    //
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect('/');
        } elseif (Auth::guard('murid')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/landing');
        }
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('murid')->check()) {
            Auth::guard('murid')->logout();
        }
        return redirect('/login');
    }
}
