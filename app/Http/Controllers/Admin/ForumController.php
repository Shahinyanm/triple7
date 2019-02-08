<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Services\ForumService;
use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest;
use App\Forum;
use App\Topic;
use App\Post;

class ForumController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::with('topics')->get()->map(function ($forum) {

            $forum->posts_count = Post::whereIn('topic_id', $forum->topics->pluck('id')->toArray())->count();
            $forum->topics_count = $forum->topics->count();
            return $forum;
        });



        return view('admin.forum.index',compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ForumRequest $request)
    {
//            dd($request->all());
       Forum::create([
            'title' => $request->title,
            'text' => $request->text,
        ]);

       return redirect()->route('admin.forums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forum = Forum::with('topics')->findOrFail($id);
        $forum->posts_count = Post::whereIn('topic_id', $forum->topics->pluck('id')->toArray())->count();

        return view('admin.forum.show',compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum = Forum::with('topics')->find($id);

        $forum->newTitle = json_decode($forum->getOriginal('title'));
        $forum->newText = json_decode($forum->getOriginal('text'));

        return view('admin.forum.edit', compact('forum'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ForumRequest $request, $id)
    {
        $forum = Forum::find($id);

        $forum->title = $request->title;
        $forum->text = $request->text;

        $forum->save();

        return redirect()->route('admin.forums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = Forum::find($id);
        $forum->delete();

        return redirect()->route('admin.forums.index');
    }
}
