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

class edit_teachers extends Controller
{
    public function edit_teachers($id)
    {
       $allteachers_info=DB::table('teachar_tbl')
       ->select('*')
       ->where('id',$id)
       ->first();
       // var_dump($allteachers_info) or die();

       return  view('admin.teacher_edit')
       ->with('all_teachers_info', $allteachers_info);

    }

    public function update_teachers(Request $request, $id)
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

       if ($image) {
  		$data['image']= $dbUrl;
      if ($image) {
        // $image=$request->file('image')->store('public/img');
        
        DB::table('teachar_tbl')
        ->where('id',$id)
        ->update($data);
        
      Session::put('updated_message','data updated Successfully');
      return Redirect::to('/allteachers');
      }
  		
    	}

    }
}
