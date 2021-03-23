<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        return Post::create([
            'title' => request('title'),
            'content' => request('content'),
        ]);
    }

    public function update()
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $success = $post->update([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy()
    {
        
    $success = $post->delete();
        return [
            'deleted success' => $success
        ];
    }
}
