<?php

namespace App\Http\Controllers\Dashboard\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function create()
    {
        return view('dashboard.auth.login');
    }

    public function store(Request $request)
    {
        if(! Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('dashboard.login')->with('error', 'asdasda as dasd');
        }

        return redirect()->route('dashboard.');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('dashboard.login');
    }
}
