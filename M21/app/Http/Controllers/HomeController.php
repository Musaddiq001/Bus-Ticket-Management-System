<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Buscounters;
use App\Buses;
use App\Http\Requests\HomeRequest;
use Illuminate\Support\Facades\DB;
use Validator;

class HomeController extends Controller
{

	public function index(Request $req){

		if($req->session()->has('uname')){
			return view('home.index');
		}else{
			return redirect('/login');
		}
	}   

	public function show($id){

		$user = User::find($id);
		return view('home.details', $user);
	}
	
	public function add(){

		return view('home.add');
	}

	public function insert(Request $req){
		
		$req->validate([
			'operator'=>'bail|required|min:5|unique:users',
			'manager'=>'required',
			'name'=>'required',
			'location'=>'required',
			'seatRow'=>'required',
			'seatColumn'=>'required'
		]);

		$user 			= new Buses;
		$user->operator = $req->operator;
		$user->manager 	= $req->manager;
		$user->name 	= $req->name;
		$user->location 	= $req->location ;
        $user->seatRow 	= $req->seatRow;
		$user->seatColumn 	= $req->seatColumn;

		if($user->save()){
			return redirect()->route('home.index');
		}else{
			return redirect()->route('add.index');
		}

		
	}

	public function edit($id){
	
		$user = User::find($id);
		return view('home.edit', $user);
	}
	public function edit1($id){

		$user = Buscounters::find($id);
		return view('home.edit1', $user);
	}
	
/*	public function edit2($id){

		$user = Buscounters::find($id);
		return view('home.edit2', $user);
	}*/

	public function update($id, Request $req){
		
		$validation = $this->validate($req, [
			'username'=>'bail|required|unique:users',
			'email'=>'required|min:5',
		])->validate();

		$validation->validate();
		
		$user = User::find($id);
		$user->username = $req->username;
		$user->email = $req->uname;
		$user->password = $req->password;
		$user->type 	= $req->type;

		if($user->save()){
			return redirect()->route('home.list1');
		}else{
			return redirect()->route('home.edit', $id);
		}
	}
	public function update1($id, Request $req){
		
		$user = Buscounters::find($id);
		$user->operator = $req->operator;
		$user->manager = $req->manager;
		$user->name = $req->name;
		$user->location 	= $req->location;

		if($user->save()){
			return redirect()->route('home.list2');
		}else{
			return redirect()->route('home.edit1', $id);
		}
	}

	public function delete($id){
		$user = User::find($id);
		return view('home.delete', $user);
	}

    public function delete1($id){
		$user = Buscounters::find($id);
		return view('home.delete1', $user);
	}	
	

	public function destroy($id, Request $req){
		if(User::destroy($req->userId)){
			return redirect()->route('home.list');
		}else{
			return redirect()->route('home.delete', $id);
		}
	}
	
	public function destroy1($id, Request $req){
		if(Buscounters::destroy($req->userId)){
			return redirect()->route('home.list2');
		}else{
			return redirect()->route('home.delete1', $id);
		}
	}

	public function list(){

		$users = User::all();
		return view('home.view_users', ['users'=>$users]);
	}
	
	public function list1(){	
		$users = User::all();	
	
		return view('home.view_staffs', ['users'=>$users]);
	}
	
	public function list2(){
		
		$users = Buscounters::all();
							
		return view('home.view_buscounters', ['buscounters'=>$users]);
	}
	public function list3(){
		$users = Buses::all();
		return view('home.view_buses', ['buses'=>$users]);
	}
	public function searchBus(Request $request)
	{
		
		
        $buses = DB::table('buses');
        if( $request->input('search')){
            $buses = $buses->where('name', 'LIKE',  $request->search . "%");
        }
        $buses = $buses->paginate(10);
        
    	return view('home.view_buses', compact('buses'));
    }

	public function searchCounter(Request $request)
	{
        $buscounters = DB::table('buscounters');
        if( $request->input('search')){
            $buscounters = $buscounters->where('name', 'LIKE',  $request->search . "%");
        }
    	return view('home.view_buscounters', compact('buscounters'));
    }
}
