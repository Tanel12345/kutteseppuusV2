<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
        // Show login form
        public function showLoginForm()
        {
            return view('auth.login');
        }
    
        
        
        
        
        // Handle login request
        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                $request->session()->regenerateToken();
               
                return redirect()->route('admin.dashboard');
               
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }}

       
        
        
        
        // Handle logout
        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login');
        }
    
}
