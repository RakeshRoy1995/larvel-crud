<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Response,File;
use DB;
use Validator;
use Redirect;
use View;
use Session;
Session_start();

class add_teachers extends Controller
{
    public function addteachers()
    {
       return view('admin.addteacher');

    }

    public function save_teachers(Request $request)
    {
       $data = array();
       $data['name']=$request ->name;
       $data['faculty']=$request ->faculty;
       $data['department']=$request ->department;
       $data['email']=$request ->email;
       $data['number']=$request ->number;
       $data['password']=$request ->password;
       // $image=$_FILES['image'];
       $image=$request->file('image');
       $uploadPath = 'image';
       $dbUrl = $uploadPath."/".$image->getClientOriginalName();
       // $path = Storage::putFile('public/img', $request->file('image'));
       $image->move($uploadPath,$image->getClientOriginalName());
       
        // var_dump($image) or die();

    if ($image) {
  		$data['image']= $dbUrl;
      if ($image) {
        // $image=$request->file('image')->store('public/img');
        
        DB::table('teachar_tbl')->insert($data);
        
      Session::put('message','data Inserted Successfully');
      return Redirect::to('/addteachers');
      }
  		
    	}
      else{
        echo "string";
      }
    } 

 }
