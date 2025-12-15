<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;

use Illuminate\View\View ;

use App\Models\Post;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy("id", "desc")->simplePaginate(10);
        return view("dashboard.index", ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     * @return view
     */
    public function create():view
    {
        return view("dashboard.post_create");
    }

    /**
     * Store a newly created resource in storage.
     * @param CreatePostRequest contains title, topic, content, url, description, category
     */
    public function store(CreatePostRequest $request)
    {
        Post::create($request->all());

        return response()->json([
            "message" => "Post successfully added."
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view("dashboard/post", ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdatePostRequest contains title, topic, content, url, description, category and updated_at
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        $update = [
            "url" => $request->url,
            "topic" => $request->topic,
            "title" => $request->title,
            "description" => $request->description,
            "image" => $request->image,
            "content" => $request->content,
            "category" => $request->category,
            "keywords" => $request->keywords,
            "updated_at" => $request->updated_at
        ];
        Post::where(["id" => $id])->update($update);

        return redirect("dashboard/post/edit/$id")->with("status", "Post updated!");
    }
}
