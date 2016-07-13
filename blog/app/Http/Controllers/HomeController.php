<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Blog;
//use App\Http\Controllers\Authcontroller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $blogs=Blog::all();
       return view('admin.blog.index', array('blogs'=>$blogs));
       
    }
}
