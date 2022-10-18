<?php

namespace App\Http\Controllers\Backend;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notices = Notice::latest()->paginate(20);
        return view('backend.notice.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.notice.create');
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
            'title' => 'required',
            'file' => 'required|file|mimes:pdf',
        ]);

        $path = $request->file('file')->store('/notices',[
            'disk' => 'public'
        ]);

        Notice::create([
            'title' => $request->title,
            'url' => $path,
            'pined' => $request->has('pined'),
        ]);

        return redirect(route('admin.notice.index'))->with('success','Notice Created Successfully');
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
    public function edit(Notice $notice)
    {
        return view('backend.notice.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'nullable|file|mimes:pdf',
        ]);

        if ($request->filled('file')) {
            $path = $request->file('file')->store('/notices',[
                'disk' => 'public'
            ]);
        }else{
            $path = $notice->url;
        }

        $notice->update([
            'title' => $request->title,
            'url' => $path,
            'pined' => $request->has('pined'),
        ]);

        return redirect(route('admin.notice.index'))->with('success','Notice Updated Successfully');
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
