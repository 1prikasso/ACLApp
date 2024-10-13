<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registration()
    {
        return view('user.register');
    }

    public function login()
    {
        return view('user.login');
    }

    public function signUp(UserStoreRequest $request)
    {
        $request = $request->validated();

        $user = User::create([
            'name' => $request["name"],
            'email' => $request["email"],
            'password' => Hash::make($request["password"]),
        ]);
 
        Auth::attempt($user);
        
        return redirect()->route('dashboard');
    }   

    public function signIn(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
