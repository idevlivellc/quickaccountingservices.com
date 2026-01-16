<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthViewController extends Controller
{
    /**
     * Display the home page of the admin panel
     */
    public function home(): View
    {
        $data = [
            "posts" => Post::orderBy("id", "desc")->get()->take(4),
            "users" => User::get()->take(4)
        ];
        
        return view("dashboard.index", $data);
    }
}
