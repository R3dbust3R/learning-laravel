<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request) {
        $page_title = 'Login';

        return view('login-page', compact('page_title'));
    }

    public function check(Request $request) {

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect(route('home'));

        } else {
            return back()->withErrors([
                'email' => 'Email or password incorrect',
            ]);
        }
        
    }

    public function logout(Request $request) {
        
        $request->session()->flush();

        Auth::logout();

        return redirect(route('login'));

    }
}
