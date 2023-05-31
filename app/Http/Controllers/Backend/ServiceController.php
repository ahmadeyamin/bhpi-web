<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('sort', 'ASC')->paginate(20);
        return view('backend.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('backend.service.create');
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
            'name' => 'required',
            'sort' => 'required|integer',
            "image" => "required|image|max:1024",
            "links_name.*" => "required",
            "links_url.*" => "required"
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('/services',[
                'disk' => 'public'
            ]);
        }else{
            $path = null;
        }

        $service = Service::create([
            'name' => $request->name,
            'sort' => $request->sort,
            'image' => $path,
        ]);

        // $service->links()->createMany();

        foreach ($request->links_name as $key => $name) {
            $service->links()->create([
                'name' => $name,
                'url' => $request->links_url[$key],
            ]);
        }

        return redirect(route('admin.service.index'))->with('success','Service Added Successfully');
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
        $service = Service::findOrFail($id);

        $service->links =  $service->links()->get()->map(function($link,$key){
            return [
                'name' => $link->name,
                'url' => $link->url,
                'id' => $key
            ];
        });

        return view('backend.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'sort' => 'required|integer',
            "image" => "nullable|image|max:1024",
            "links_name.*" => "required",
            "links_url.*" => "required"
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('/services',[
                'disk' => 'public'
            ]);
        }else{
            $path = $service->image;
        }

        $service->update([
            'name' => $request->name,
            'sort' => $request->sort,
            'image' => $path,
        ]);

        $service->links()->delete();

        foreach ($request->links_name as $key => $name) {
            $service->links()->create([
                'name' => $name,
                'url' => $request->links_url[$key],
            ]);
        }

        return redirect(route('admin.service.index'))->with('success','Service updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        $service->links()->delete();
        $service->delete();

        
        return redirect(route('admin.service.index'))->with('success','Service deleted Successfully');
    }
}
