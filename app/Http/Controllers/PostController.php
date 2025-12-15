<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

# Requests
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;

# Resource
use App\Http\Resources\PostResource;

# Models
use App\Models\CallToAction;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return view
     */
    public function index(): view
    {
        $posts = Post::orderBy("id", "desc")->simplePaginate(9);

        if (Auth::user()) {
            return view("dashboard.index", ["posts" => $posts]);
        }
        
        return view("resources.blog", ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     * @return view
     */
    public function create(): view
    {
        return view("dashboard.post_create");
    }

    /**
     * Store a newly created resource in storage.
     * @param CreatePostRequest contains the input fields for validation
     * @return RedirectResponse
     */
    public function store(CreatePostRequest $request): RedirectResponse
    {
        $postArray = [
            "url" => $request->input("url"),
            "topic" => $request->input("topic"),
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "image" => $request->input("image"),
            "content" => $request->input("content"),
            "category" => $request->input("category"),
            "keywords" => $request->input("keywords"),
        ];

        $post = Post::create($postArray);

        if ($request->input("add-cta")) {
            $ctaArray = [
                "post_id" => $post->id,
                "cta_header" => $request->input("cta_header"),
                "cta_body" => $request->input("cta_body")
            ];

            CallToAction::create($ctaArray);
        }

        return back()->with([
            "status" => true,
            "message" => "Post successfully added."
        ]);
    }

    /**
     * Display the specified resource.
     * @param string $url contains the url of the resource
     * @return view
     */
    public function show(string $url)
    {
        if (Auth::user()) {
            $post = Post::with("cta")->find($url);
            $post = (object) (new PostResource($post))->resolve(request());

            return view("dashboard/post", ["post" => $post]);
        }

        $post = Post::with("cta")->firstWhere(["url" => $url]);
        $post = (object) (new PostResource($post))->resolve(request());

        return view("resources/post_edit", ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param string $id contains the id of the post
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        Post::query()->where("id", $id)->delete();
        
        return back()->with([
            "delete-status" => true,
            "message" => "Post successfully deleted."
        ]);
        // return response()->json("hello");
    }
}
