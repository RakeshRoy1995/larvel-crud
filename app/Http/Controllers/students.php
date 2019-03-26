<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Redirect;
use View;
use Session;

class students extends Controller
{
    public function day_batch(){
    	return view('admin.add_student');
    }

    public function save_students_day(Request $request)
    {
       $data = array();
       $data['name']=$request ->name;
       $data['faculty']=$request ->faculty;
       $data['department']=$request ->department;
       $data['roll']=$request ->roll;
       $data['batch']=$request ->batch;
       $data['Reg_number']=$request ->Reg_number;
       $data['password']=$request ->password;
        // var_dump($image) or die();
     
      DB::table('student_tbl')->insert($data);
        
      Session::put('message','data Inserted Successfully');
      return Redirect::to('/addstudents_day');
      
    }
}
