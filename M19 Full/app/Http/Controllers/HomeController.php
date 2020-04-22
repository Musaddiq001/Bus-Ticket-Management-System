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

		//$data = ['id'=>'11-11-1', 'name'=>'amin', 'dept'=>'CSE'];
		//return view('home.index', $data);

		/*return view('home.index')
				->with('id', '12-333-4')
				->with('name', 'alamin')
				->with('dept', 'SE');*/

/*		return view('home.index')
				->withId('12-333-4')
				->withName('alamin')
				->withDept('SE');*/

		/*$v = view('home.index');
		$v->withId('222-222');
		$v->withName('amin');
		$v->withDept('CIS');
		return $v;*/

		//$req->session()->put('uname', 'alamin');
		//$req->session()->put('password', '123');
		//$user = $req->session()->get('uname');
		//$pass = $req->session()->get('password');
		//$data = $req->session()->all();
		//$data = $req->session()->pull('uname');
		//$req->session()->forget('uname');
		//$req->session()->flush();
		//$req->session()->has('uname');
		//$req->session()->flash('cgpa', '4');
		//$req->session()->flash('abc', '4');
		//$req->session()->keep('cgpa');
		//$req->session()->reflash();
		
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

		/*$req->validate([
			'username'=>'bail|required|min:5|unique:users',
			'password'=>'required',
			'name'=>'required',
			'cgpa'=>'required'
		]);
*/
		/*$validation = $this->validate($req, [
			'username'=>'bail|required|min:5|unique:users',
			'password'=>'required',
			'name'=>'required',
			'cgpa'=>'required'
		])->validate();*/

		//$validation->validate();

/*		$validation = Validator::make($req->all(), [
			'username'=>'bail|required|min:5|unique:users',
			'password'=>'required',
			'name'=>'required',
			'cgpa'=>'required'
		]);

		if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();

			return redirect()->route('home.add')
							->with('errors', $validation->errors())
							->withInput();		
		}*/

/*		$user 			= new User;
		$user->name 	= $req->name;
		$user->username = $req->username;
		$user->cgpa 	= $req->cgpa;
		$user->dept 	= $req->dept;
		$user->password = $req->password;
		$user->type 	= $req->type;

		if($user->save()){
			return redirect()->route('home.list');
		}else{
			return redirect()->route('home.add');
		}*/
		
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
		//	'password'=>'required',
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
		//$students = $this->getStudentList();
	/*	$users = DB::table('users')
                    ->where('type','manager');
					$users = DB::table('users')
                    ->where('type','manager');*/
		$users = User::all();
		return view('home.view_users', ['users'=>$users]);
	}
	
	public function list1(){
		//$students = $this->getStudentList();
	/*	$users = DB::table('users')
                    ->where('type','manager');
					$users = DB::table('users')
                    ->where('type','manager');*/
		/*$use = DB::table('users')
                    ->where('type',"staff")*/
		
		$users = User::all();
		
					
		return view('home.view_staffs', ['users'=>$users]);
	}
	
	public function list2(){
		//$students = $this->getStudentList();
	/*	$users = DB::table('users')
                    ->where('type','manager');
					$users = DB::table('users')
                    ->where('type','manager');*/
		/*$use = DB::table('users')
                    ->where('type',"staff")*/
		
		$users = Buscounters::all();
		
					
		return view('home.view_buscounters', ['buscounters'=>$users]);
	}
	public function list3(){
		$users = Buses::all();
		return view('home.view_buses', ['buses'=>$users]);
		
	}

	function getStudentList (){
		return [
				['id'=>'12','name'=>'abc','cgpa'=>2.4,'dept'=>'CS'],
				['id'=>'13','name'=>'XYZ','cgpa'=>2.8,'dept'=>'CSSE'],
				['id'=>'14','name'=>'PQR','cgpa'=>2.9,'dept'=>'CSE'],
				['id'=>'125','name'=>'aaa','cgpa'=>2.6,'dept'=>'CIS']
		];
	}
}
