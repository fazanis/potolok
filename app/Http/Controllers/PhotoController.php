<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photoList = Photo::all();
        return view('photo',compact('photoList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photofile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mesto'=>'required',
            'title'=>'required'
        ]);

        $imageName = time().'.'.$request->file('photofile')->extension();
        $request->photofile->move(public_path('photo'), $imageName);
        Photo::create(['photo'=>$imageName,'title'=>$request->title,'mesto'=>$request->mesto]);

        return redirect()->route('photo.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        $photoList = Photo::all();

        return view('photo',compact('photoList','photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        if(file_exists(public_path('photo').'/'.$photo->photo) && $request->photofile!=null) {
            unlink(public_path('photo') . '/' . $photo->photo);
        }

        if ($request->photofile!=null) {
            $imageName = time() . '.' . $request->photofile->extension();
            $request->photofile->move(public_path('photo'), $imageName);
        }else {
            $imageName = $photo->photo;
        }


        $photo->update(['photo' => $imageName, 'mesto' => $request->mesto, 'title' => $request->title]);

        return redirect()->route('photo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        if(file_exists(public_path('photo').'/'.$photo->photo)){
            unlink(public_path('photo').'/'.$photo->photo);
        }
        $photo->delete();
        return redirect()->route('photo.index');

    }
}
