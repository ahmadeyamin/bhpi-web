<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Management;
use App\Models\Teacher;
use App\Models\Technology;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::orderBy('sort', 'ASC')->paginate(20);
        return view('backend.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $technologies = Technology::all();
        $managements = Management::all();
        return view('backend.teacher.create',compact('technologies','managements'));
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
            "name" => "required",
            "title" => "required",
            "education" => "required",
            "email" => "nullable|email",
            "phone" => "nullable|min:11",
            "message" => "nullable",
            "avatar" => "nullable|image|max:1024",
            'technology' => "nullable|exists:technologies,id",
            'managements.*' => "nullable|exists:management,id"
        ]);

        if ($request->file('avatar')) {
            $path = $request->file('avatar')->store('/teachers',[
                'disk' => 'public'
            ]);
        }else{
            $path = null;
        }


        $teacher = Teacher::create([
            "name" => $request->name,
            "title" => $request->title,
            "education" => $request->education,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message,
            "avatar" => $path,
            "sort" => $request->sort,
            "technology_id" => $request->technology,
        ]);

        $teacher->managements()->attach($request->managements);

        return redirect(route('admin.teacher.index'))->with('success','Teacher Added Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $technologies = Technology::all();
        $managements = Management::all();
        return view('backend.teacher.edit',compact('technologies','teacher','managements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        // return $request;
        $request->validate([
            "name" => "required",
            "title" => "required",
            "education" => "required",
            "email" => "nullable|email",
            "phone" => "nullable|min:11",
            "message" => "nullable",
            "avatar" => "nullable|image|max:1024",
            'technology' => "nullable|exists:technologies,id",
            'managements.*' => "nullable|exists:management,id"
        ]);

        if ($request->file('avatar')) {
            $path = $request->file('avatar')->store('/teachers',[
                'disk' => 'public'
            ]);
        }else{
            $path = $teacher->avatar;
        }

        $teacher->update([
            "name" => $request->name,
            "title" => $request->title,
            "education" => $request->education,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message,
            "avatar" => $path,
            "sort" => $request->sort,
            "technology_id" => $request->technology,
        ]);

        
        $teacher->managements()->sync($request->managements);

        
        return redirect(route('admin.teacher.index'))->with('success','Teacher Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
