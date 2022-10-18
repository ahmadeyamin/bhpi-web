<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $notices = Notice::latest()->limit(5)->get();
        $pined_notices = Notice::wherePined(true)->latest()->limit(5)->get();
        
        return view('index',compact('notices','pined_notices'));
    }
}
