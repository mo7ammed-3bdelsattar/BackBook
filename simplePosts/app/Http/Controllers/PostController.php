<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $posts = Post::create($request->all());

        return $this->responseSuccess('Data Retrieved Successfully!', $posts->toArray());
    }

    public function show(Post $post)
    {
        return $this->responseSuccess('Data Retrieved Successfully!', $post->toArray());

    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post->update($request->all());

        return $this->responseSuccess('Data Retrieved Successfully!', $post->toArray());

    }

    public function destroy(Post $post)
    {
        if (!$post) {
            return $this->responseFailure('Post Not Found!',404);
        }
        $post->delete();
        return $this->responseSuccess('Post Deleted Successfully!');

    }
}
