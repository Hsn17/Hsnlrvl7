<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
   public function show(){
       $results=DB::select("select * from users");
       return view('users',compact('results'));
   }
}   
