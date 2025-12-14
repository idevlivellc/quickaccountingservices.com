<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# Resource
use App\Http\Resources\PostResource;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * List all the blog posts and display them in the frontend
     * @param Request contains query parameters
    */
    public function index(Request $request)
    {
        $posts = Post::orderBy("id", "desc")->simplePaginate(9);
        return view("resources/blog", ["posts" => $posts]);
    }

    /**
     * Display the specified resource.
     * @param string $url contains the url of the resource
    */
    public function show(string $url)
    {
        $post = Post::with("cta")->firstWhere(["url" => $url]);
        // $post = new PostResource($post);
        $post = (object) (new PostResource($post))->resolve(request());

        // return response()->json($post);
        return view("resources/post", ["post" => $post]);
    }
}
