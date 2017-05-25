<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PeopleController extends Controller
{
	public function index(){
	$data['people'] = People::all();
	return view('people.index',$data);
   	}

   	public function create(){
   		return view('people.create');
   	}
   	public function store(Request $request){
   		// dd($request->all());
   		People::create($request->all());
   		return redirect('/book');
   	}
   	public function destroy($id){
   		People::destroy($id);
   		return redirect('/book');
   	}
   	public function edit($id){
   		$data['people'] = People::find($id);
   		// dd($data['people']);
   		return view('people.edit',$data);
   	}
   	public function update(Request $request, $id){
   		$people = People::find($id);
   		$people->update($request->all());
   		return redirect('/book');
   	}
}