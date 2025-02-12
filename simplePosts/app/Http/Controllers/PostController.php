<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Traits\JsonResponseTrait;


class PostController extends Controller
{
    use JsonResponseTrait;
    public function index()
    {
        $posts = Post::all();
        return $this->responseSuccess('Data Retrieved Successfully!', $posts->toArray());
    }

    public function store(Request $request)
    {
        if (!auth('api')->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $posts = Post::create($request->all());

        return $this->responseSuccess('Data Retrieved Successfully!', $posts->toArray());
    }

    public function show(Post $post)
    {
        if (!auth('api')->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return $this->responseSuccess('Data Retrieved Successfully!', $post->toArray());

    }

    public function update(Request $request, Post $post)
    {
        if (!auth('api')->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post->update($request->all());

        return $this->responseSuccess('Data Retrieved Successfully!', $post->toArray());

    }

    public function destroy(Post $post)
    {
        if (!auth('api')->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        if (!$post) {
            return $this->responseFailure('Post Not Found!',404);
        }
        $post->delete();
        return $this->responseSuccess('Post Deleted Successfully!');

    }
}
