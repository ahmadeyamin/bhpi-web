<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Service;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $notices = Notice::latest()->limit(5)->get();
        $pined_notices = Notice::wherePined(true)->latest()->limit(5)->get();
        $technologies = Technology::latest()->get();
        $services = Service::with('links')->orderBy('sort', 'ASC')->get();
        
        return view('index',compact('notices','pined_notices','technologies','services'));
    }

    public function gallery($type)
    {

        $galleries = Gallery::query()
        ->when($type == "image",function ($q)
        {
            $q->where("type","image");
        })
        ->when($type == "video",function ($q)
        {
            $q->where("type","video");
        })
        ->latest()
        ->get();
        return view('gallery', compact('type','galleries'));
    }

    public function notices()
    {

        $notices = Notice::latest()->paginate(50);
        return view('notices',compact('notices'));

    }
}
