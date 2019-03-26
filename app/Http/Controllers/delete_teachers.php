<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class delete_teachers extends Controller
{
    public function teacher_delete($id)
    {
       DB::table('teachar_tbl')
       ->where('id',$id)
       ->delete();

       return Redirect::to('/allteachers');

    }
}
