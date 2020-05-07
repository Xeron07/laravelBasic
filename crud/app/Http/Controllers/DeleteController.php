<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    //
    public function User(Request $req,$id)
    {
         DB::table('users')->where('uId', '=', $id)->delete();
         DB::table('data')->where('dId', '=', $id)->delete();
         return redirect()->route('list');
    }
}
