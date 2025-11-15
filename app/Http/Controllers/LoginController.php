<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function view()
    {
        return view("dashboard/login");
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'min:8', 'max:255', 'string'],
            'password' => ['required', 'min:8', 'max:255', 'string']
        ]);

        if (!$validated) {
            return redirect("dashboard");
        }

        $user = User::where("email", $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                "email" => "User not found!",
            ])->onlyInput("email");
        }

        if (!password_verify($request->password, $user->password)) {
            return back()->withErrors([
                "password" => "The password is not correct!",
            ])->onlyInput("email");
        }

        Auth::login($user);
        
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route("login");
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "min:8", "max:255", "string"],
            "password" => ["required", "min:8", "max:255", "string", "confirmed"]
        ]);

        $user = User::where("email", $request->email)->first();

        if ($user) {
            return back()->withErrors([
                "email" => "User already exists!",
            ])->onlyInput("email");
        }

        $inputArray = [
            "name" => ucwords($request->name),
            "email" => strtolower($request->email),
            "password" => Hash::make($request->password),
            "role" => "editor"
        ];

        $user = User::create($inputArray);

        return response()->json([
            "message" => "New user created!"
        ]);
    }
}
