<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Show login form
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Login user
     */
    public function authenticate()
    {
        $fields = request()->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($fields)) {
            request()->session()->regenerate();

            return redirect('/manage-shipments')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid email or password'])->onlyInput('email');
    }

    /**
     * Log user out of our application
     */
    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }
}
