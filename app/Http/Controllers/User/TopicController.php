<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\TopicRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Post;


class TopicController extends Controller
{
    public function index()
    {

    }


    public function show($id)
    {

        $topic = Topic::with(['user','posts' => function($query){
            return $query->with('user');
        }])->findOrFail($id);
        return view('user.forum.topic.topic-posts',compact('topic'));
    }

    public function store(TopicRequest $request)
    {
        Topic::create([
            'title' => $request->title,
            'forum_id' => $request->forum_id,
            'user_id'   => Auth::id(),
        ]);

        return redirect()->route('user.forums.show', $request->forum_id);
    }


}
