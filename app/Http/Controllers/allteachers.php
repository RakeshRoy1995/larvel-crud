<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class allteachers extends Controller
{
     public function allteachers()
    {
       $allteachers_info=DB::table('teachar_tbl')->get();
       return  view('admin.allteacher')
       ->with('all_teachers_info', $allteachers_info);

    }
}
