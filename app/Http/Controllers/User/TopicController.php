<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\TopicRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Traits\GeoCode;



class TopicController extends Controller
{

    use GeoCode;

    public function index()
    {
        //
    }


    public function show($id)
    {

        $topic = Topic::with(['user','posts' => function($query){
            return $query->with('user');
        }])->where('code', app()->getLocale())->find($id);

        if($topic){
            $topic->geocode = $this->localeCode();
        }
        return view('user.forum.topic.topic-posts',compact('topic'));
    }

    public function store(TopicRequest $request)
    {


        Topic::create([
            'title' => $request->title,
            'forum_id' => $request->forum_id,
            'user_id'   => Auth::id(),
            'code'      => $this->localeCode(),
        ]);

        return redirect()->route('user.forums.show', $request->forum_id);
    }


}
