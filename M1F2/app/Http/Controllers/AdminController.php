<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class AdminController extends Controller
{
    public function index(Request $req){

		if($req->session()->has('email')){
			return view('admin.index');
		}else{
			return redirect('/login');
        }
        
	}
	
	public function viewManager()
	{
		
		$managers=User::all() ;
        return view('admin.viewManager',compact('managers'));
	}

	public function deleteManager($id)
    {
        User::find($id)->delete();
        return redirect(route('viewManager'))->with('successMsg','Manager deleted Successfully');
	}
	
	public function viewStaff()
	{
		
		$staffs=User::all() ;
        return view('admin.viewStaff',compact('staffs'));
	}

	public function deletestaff($id)
    {
        User::find($id)->delete();
        return redirect(route('viewStaff'))->with('successMsg','Staff deleted Successfully');
	}

	public function editStaff($id)
    {
        $staff=User::find($id);
        return view('admin.editStaff',compact('staff'));
	}
	
	public function updateStaff(Request $request,$id)
    {
        $this->validate($request,[
            'uname'=>'required',
            'password'=>'required',
            'type'=>'required',
            'name'=>'required'
        ]);

        $staff=User::find($id);
        $staff->username=$request->uname;
        $staff->password=$request->password;
        $staff->type=$request->type;
        $staff->name=$request->name;
        $staff->save();
        return redirect(route('viewStaff'))->with('successMsg','staff updated Successfully');
    }
	

}
 