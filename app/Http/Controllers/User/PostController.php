<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
    public function send(PostRequest $request)
    {
        Post::create([
            'text'      => $request->text,
            'user_id'   => Auth::id(),
            'topic_id'  => $request->topic_id,
        ]);

        return back();
    }
}
