<?php

namespace App\Http\Controllers;
use App\Video_list;
use Illuminate\Http\Request;

class Video_listController extends Controller
{
    public function show()
    {
    	return Video_list::all();
    }

    public function search($title)
    {
    	return Video_list::where('title','like', '%'.$title.'%')->get();
    }
}
