<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('pined', 'ASC')->paginate(20);
        return view('backend.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;
        $request->validate([
            "title" => "required",
            "image" => "nullable|image|max:1024",
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('/galleries',[
                'disk' => 'public'
            ]);
        }else{
            $path = null;
        }


        $gallery = Gallery::create([
            "title" => $request->title,
            "type" => $request->type,
            "url" => $path,
            "pined" => $request->has("pined"),
        ]);


        return redirect(route('admin.gallery.index'))->with('success','Gallery Added Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        
        return view('backend.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        // return $request;
        $request->validate([
            "title" => "required",
            "image" => "nullable|image|max:1024",
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('/galleries',[
                'disk' => 'public'
            ]);
        }else{
            $path = $gallery->url;
        }

        $gallery->update([
            "title" => $request->title,
            "url" => $path,
            "pined" => $request->has("pined"),
        ]);

        
        return redirect(route('admin.gallery.index'))->with('success','gallery Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
