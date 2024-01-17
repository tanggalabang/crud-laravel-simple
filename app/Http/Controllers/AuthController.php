<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }
    
    public function login(Request $request) {
        // dd($request->all());  
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('mahasiswa');
        }else{
            return redirect()->back()->with('error', 'Login gagal!');
        }
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
