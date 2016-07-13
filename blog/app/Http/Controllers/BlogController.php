<?php

// app/controllers/CmsController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use DB;
use Auth;
use App\User;
use Illuminate\Support\Facades\Input;
//use Form;



class BlogController extends Controller {    



    public function index(){
        /*User::create([
            'name' => 'Mahesh',
            'email' => 'themaheshe1@gmail.com',
            'password' => bcrypt('mahesh123')
            ]);
        */
        $blogs=Blog::all();
        return view('public.blog.index', array('blogs'=>$blogs));

    }

    public function show($id)
    {
     $blog = Blog::findOrFail($id);
     return view('public.blog.show', array('blog'=>$blog));
    }

        public function create()
        {  
            $blog= new Blog;
            return view('admin.blog.create',array('blog'=>$blog));

        }

        public function save(Request $request)
        {
                $this->validate($request, [
                'title' => 'required|unique:blog|max:255',
                'body' => 'required',
                ]);
                $input = Input::all();
                $input['user_id']=Auth::id();
                Blog::create($input);
                return redirect('/home')->with('message', 'Blog created');
                
        }

        public function edit(Request $request,$id)
        {
            $blog= Blog::find($id);
            return view('admin.blog.edit',array('blog'=>$blog));
        }

        public function update(Request $request,$id)
        {
            $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            ]);

            $input = Input::all();
            Blog::find($id)->update($input);
           
            return redirect('/home')->with('message', 'Blog updated.');

        }

         
        public function destroy($id)
        {
            $this->middleware('auth');
            Blog::where('id',$id)->delete();
            return redirect('/home');
        }

        

    
} 