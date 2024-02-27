<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login()
    {
        return view("user.login");
    }
    public function process(Request $request)
    {
        $validated = $request->validate([
            'user_name' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'successfully logged in');
        }

        return back()->withErrors(['user_name' => 'wrong credentials!'])->onlyInput('user_name');
    }

    public function register()
    {
        return view('user.register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => ['required', 'min:4', Rule::unique('users', 'user_name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:4',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return redirect('/login')->with('success', 'successfully created account');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Logged Out');
    }
}
