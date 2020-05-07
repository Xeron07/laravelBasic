<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddStudent extends Controller
{
    //

    public function Index(Request $req){
        return view("add");
    }


    public function Add(Request $req){
        $id=DB::table("users")->insertGetId(
            [
                'name'=>$req->name,
            ]
            );

        DB::table("data")->insert([
            'dId'=>$id,
            'email'=>$req->email,
            'address'=>$req->address,
            'phone_no'=>$req->phone,
            'total_marks'=>$req->number
        ]);

        $req->session()->flash('addMessage',"SuccessFully Added");
        return redirect()->action('AddStudent@Index');
    }


}
