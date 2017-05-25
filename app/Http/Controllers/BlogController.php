<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index(){
    	$data['blogs'] = Blog::all();
    	return view ('home',$data);
    }

    public function create(){
   		return view('home.create');
   	}

   	public function store(Request $request){
   		Blog::create($request->all());
   		return redirect('/home');
   	}

   	public function destroy($id){
   		Blog::destroy($id);
   		return redirect('/home');
   	}

   	public function edit($id){
   		$data['blogs'] = Blog::find($id);
   		return view('home.edit',$data);
   	}

   	public function update(Request $request, $id){
   		$blogs = Blog::find($id);
   		$blogs->update($request->all());
   		return redirect('/home');
   	}
    
}
