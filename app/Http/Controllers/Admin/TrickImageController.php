<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\TrickImage;

class TrickImageController extends Controller
{

    public function show($id)
    {
        $images = TrickImage::where('trick_id',$id)->get();


        return view('admin.trick.images',compact('images'));


    }


    public function destroy($id)
    {
        $image = TrickImage::findOrFail($id);
        $image->delete();
        return back();
    }
}
