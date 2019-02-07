<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\TrickRequest;
use App\Trick;
use App\TrickRating;
use App\TrickImage;
use Image;
use Storage;

class TrickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    yes *100/yndhanur
    public function index()
    {
        $tricks = Trick::with('rating','images')->get()->map(function($trick){
            if($trick->rating->count()) {
                $trick->procent = $trick->rating()->RatingYes()->count() * 100 / $trick->rating->count();
            }else{
                $trick->procent = 0;
            }

            return $trick;
        });
        return view('admin.trick.index', compact('tricks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trick.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrickRequest $request)
    {

//        dd($request->all());
        if($request->activated){
            $activated = 1;
        }else {
            $activated = 0;
        }
        $trick = new Trick;
        $trick->description1 = $request->description1;
        $trick->description2 = $request->description2;
        $trick->description3 = $request->description3;
        $trick->description4 = $request->description4;
        $trick->amount       =  floatval($request->amount);
        $trick->activated    =  $activated;
        $trick->link         = $request->link;

        $trick->save();


//        $trick = Trick::create([
//            'description1' => $request->description1,
//            'description2' => $request->description2,
//            'description3' => $request->description3,
//            'description4' => $request->description4,
//            'amount'       => floatval($request->amount),
//            'link'         => $request->link,
//            'activated'    => $activated,
//        ]);




        if ($request->images) {
            foreach($request->images as $image){

                $file = $image;
                $storedFile = Storage::disk('public')->put('image/tricks', $file);


                TrickImage::create([
                    'src' => str_replace('public/', '', $storedFile),
                    'trick_id'=> $trick->id,
                ]);
            }
        }
        return redirect()->route('admin.tricks.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trick = Trick::findOrfail($id);

        return view('admin.trick.edit', compact('trick'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrickRequest $request, $id)
    {
        if($request->activated){
            $activated = 1;
        }else {
            $activated = 0;
        }

        $trick = Trick::findOrfail($id);
        $trick->description1 = $request->description1;
        $trick->description2 = $request->description2;
        $trick->description3 = $request->description3;
        $trick->description4 = $request->description4;
        $trick->amount       = $request->amount;
        $trick->link         = $request->link;
        $trick->activated    = $activated;

        $trick->save();

        if ($request->images) {
            foreach($request->images as $image){

                $file = $image;
                $storedFile = Storage::disk('public')->put('image/tricks', $file);

                TrickImage::create([
                    'src' => str_replace('public/', '', $storedFile),
                    'trick_id'=> $trick->id,
                ]);

            }
        }

        return redirect()->route('admin.tricks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trick = Trick::findOrFail($id);
        $trick->delete();
        return back();
    }
}
