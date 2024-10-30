<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.index'); // Assuming both login and register forms are on the same page
    }

    // Handle login
    public function login(Request $request)
    {
        // Validate the form data with custom error messages
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ]);
    
        // Attempt to log the user in
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Check if the authenticated user has the 'admin' role
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin');
            } else {
                // Redirect other roles to a different route
                return redirect()->intended('/indexa');
            }
        }
    
        // If login fails, redirect back with an error message
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    

    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.index'); // Assuming both login and register forms are on the same page
    }

    // Handle registration
    public function register(Request $request)
    {
        // Validate the form data with custom error messages
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
        ]);

        // Create the new user with the 'user' role
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',  // Assign the 'user' role
        ]);

        // Automatically log the user in after registration
        Auth::login($user);

        // Redirect to the dashboard or another page
        return redirect()->intended('/login');
    }

    // Handle logout
    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session and regenerate the token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the login page
        return redirect('/login');
    }
}
