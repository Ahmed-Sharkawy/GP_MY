<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Web\Auth\LoginRequest;
use App\Http\Requests\Web\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('frontend.login');
    }

    public function login(LoginRequest $request)
    {
        if (! Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('login')->with('error', 'تاكد من صحة البيانات');
        }

        return redirect()->route('home');
    }

    public function registerView()
    {
        return view('frontend.register');
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'password' => Hash::make($request->password)
        ] + $request->validated());
        return redirect()->route('login');
    }
}
