<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

  public function Index(Request $req){
    $data=DB::table('users')
    ->join("data","data.dId","=","users.uId")
    ->get();

    return view('list')->with("data",$data);
  }
}
