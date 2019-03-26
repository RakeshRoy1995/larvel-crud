<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AdminController extends Controller
{
    public function admin_dashboard()
    {
       return view('admin.dashboard');

    }

    public function login_dashboard(Request $Request)
    {
    	
    	$admin_email= $Request ->admin_email;
    	$admin_password =$Request ->admin_password;
    	$result = DB::table('admin')
    	->where('admin_email',$admin_email)
    	->where('admin_password',$admin_password)
    	->first();

    	// echo "</pre>";
    	// print_r($result);

    	if ($result) {
            Session::put('admin_email','abcd');
            Session::put('admin_id','abcd');
    		return Redirect::to('/admin_dashborad');
    	} else {
            Session::put('exception','Email or Password Invalied');
    		return Redirect::to('/backend');
    	}



    }


    public function logout()
    {
       Session::put('admin_name',null);
       Session::put('admin_id',null);

       return Redirect::to('/backend');

    }
}
