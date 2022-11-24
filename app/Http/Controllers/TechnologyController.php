<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function show(Technology $technology)
    {

        $technology->load("teachers");

        return view('technology',compact("technology"));
    }
}
