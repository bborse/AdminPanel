<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControllers extends Controller
{
    public function login()
    {
        return view('admin.login.index');
    }
    
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin-dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("/")->with('success', 'Oppes! You have entered invalid credentials'); 
    }
}
