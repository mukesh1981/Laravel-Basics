<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Search_table;
use App\Models\add_registration;

class UserController extends Controller
{
	function showdata($username)
	{ 
	return "show controler data".$username;
	}
	function showContactData($contact)
	{ 
	return view("contact",['contactname'=>$contact]);
	}
	function showUserData()
	{ 
		$data=['Mukesh','mukesh@testing.com','98182828282','MCA'];
	return view("about",['userdata'=>$data]);
	}

	
	function getData(Request $req)
	{ 
		//echo "post data";
		$req->validate([
			'name1'=>'required',
			'emailid'=>'required',
			'mobileno'=>'required'
		]);
		return $req->input();
	//return view("laravelhtmlform");
	}
	// user login controller with only session
	function userLoginCheck(Request $req)
	{
		$req->validate([
			'userid'=>'required',
			'password'=>'required'
		]);
		$data=  $req->input('userid');
		$req->session()->put('userid',$data); 
		//echo session('userid');
		return redirect('profile');

	}
	function flashSessionData(Request $req)
	{ 
		//echo "post data";
		$req->validate([
			'name1'=>'required',
			'emailid'=>'required',
			'mobileno'=>'required'
		]);
		$name=$req->input('name1');
		$req->session()->flash('name1',$name);
		//return $req->input();
	return redirect('flashsession');
	}
	function showDataFromDb()
	{ 
		//echo "post data";
		//echo "connnect to db";
		$data['table1']=DB::select("select *from search_table");
		$data['table2']=DB::select("select *from add_registrations");
		
		//echo "show one to one data";
		$data['oneToOneData']= search_table::find(1)->joinOneToOne;
		$data['oneToManyData']= search_table::find(1)->joinOneToMany;
	
		return view("showdatafromdb",['allArrayData'=>$data]);
	}
	function modelViewController()
	{ 
		//echo "post data";
		//echo "connnect to db";
		//return Search_table::all();
		$data=Search_table::paginate(1);
		return view("showdatamodelpagination",['allArrayData'=>$data]);
	}
	function saveDataDb(Request $req)
	{
		//echo "Save Data"; 
		$objAddRegistration=new add_registration;
		$objAddRegistration->name=$req->input('name1');
		$objAddRegistration->emailId=$req->input('emailid');
		$objAddRegistration->mobileNo=$req->input('mobileno');
		$objAddRegistration->education=$req->input('education');
		$objAddRegistration->gender=$req->input('gender');
		$objAddRegistration->save();
		return redirect('addform')->with('message','add successfull..');

	}
	function delete($id)
	{ 
		$data=add_registration::find($id);
		$data->delete();
		return redirect("showdatafromdb");
	}
	function showDataEdit($id)
	{
		$data=add_registration::find($id);
		return view('editaddform',['data'=>$data]) ;

	}
	function updateData1(Request $req)
	{
		//$id=;
		$data=add_registration::find($req->input('id'));
		$data->name=$req->input('name1');
		$data->emailId=$req->input('emailid');
		$data->mobileNo=$req->input('mobileno');
		$data->save();
		return redirect('showdatafromdb') ;

	}
	
    //
}
