<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == '0') {
                return redirect('/dashboard');
            }elseif (auth()->user()->role == '1') {
                return redirect('/admin/dashboard');
            }elseif (auth()->user()->role == '2') {
                return redirect('/superadmin/dashboard');
            }
        }

        return redirect('/login')->withErrors([
            'email' => 'Nomor dan Password Salah',
        ]);
    }

    public function logout(Request $request){
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
     
        return redirect('/');
    }


}
