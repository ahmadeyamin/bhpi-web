<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $technologies = Technology::withCount('teachers')->latest()->paginate(20);
        return view('backend.technology.index',compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.technology.create');
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
            'name' => 'required',
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('/technology',[
                'disk' => 'public'
            ]);
        }else{
            $path = null;
        }


        Technology::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect(route('admin.technology.index'))->with('success','Technology Added Successfully');
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
    public function edit(Technology $technology)
    {
        return view('backend.technology.edit',compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technology $technology)
    {
        $request->validate([
            'name' => 'required',
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('/technology',[
                'disk' => 'public'
            ]);
        }else{
            $path = $technology->image;
        }

        $technology->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect(route('admin.technology.index'))->with('success','Technology Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
