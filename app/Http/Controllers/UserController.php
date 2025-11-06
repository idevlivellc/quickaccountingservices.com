<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'min:8', 'max:255', 'string'],
            'password' => ['required', 'min:8', 'max:255', 'string']
        ]);

        if ($request->username == "sayandas94" && $request->password == "Admin@123") {
            $request->session()->regenerate();
            return redirect()->intended("admin/dashboard");
        }

        return back()->withErrors([
            "email" => "The provided credentials do not match our records.",
        ])->onlyInput("email");
    }
}
