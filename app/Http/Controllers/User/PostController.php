<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Topic;
use App\Traits\GeoCode;

class PostController extends Controller
{
    use GeoCode;


    public function send(PostRequest $request)
    {
    $topic = Topic::find($request->topic_id);

        if($this->localeCode() !== $topic->code ){
            return abort(404);
        }

        Post::create([
            'text'      => $request->text,
            'user_id'   => Auth::id(),
            'topic_id'  => $request->topic_id,
            'code'      => $this->localeCode(),
        ]);

        return back();
    }
}
