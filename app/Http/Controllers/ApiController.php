<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
	/* Главные страницы */
    public function indexAction(Request $request)
    {
    	return view('index');
    }
    public function filmsAction(Request $request)
    {
    	return view('films');
    }
    public function serialsAction(Request $request)
    {
    	return view('serials');
    }
    public function ratingAction(Request $request)
    {
    	return view('rating');
    }
    public function contactAction(Request $request)
    {
    	return view('contact');
    }
    /* Фильмы и сериалы */
    public function matrixAction(Request $request)
    {
    	return view('matrix');
    }
    public function maxAction(Request $request)
    {
    	return view('max');
    }
    public function showAction(Request $request)
    {
    	return view('show');
    }
    public function cloudAction(Request $request)
    {
    	return view('cloud');
    }
    public function deadAction(Request $request)
    {
    	return view('dead');
    }
    public function breakingbadAction(Request $request)
    {
    	return view('breakingbad');
    }
    public function siliconAction(Request $request)
    {
    	return view('silicon');
    }
    public function xfilesAction(Request $request)
    {
    	return view('xfiles');
    }
}
