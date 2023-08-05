<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\l1;
use Illuminate\Support\Facades\DB;
class c8 extends Controller
{
    // public function testMethod(Request $res)
    // {
    //     return $res->input();
    // }
    public function insert(Request $req)
    {
        $l1= new l1;
        $l1->name=$req->name;
        $l1->phoneno=$req->phoneno;
        $l1->email=$req->email;
        $l1->password=$req->password;
        $l1->save();
        return redirect("login");
    }
    public function login(Request $req)
    {
        $data=DB::table('l1')->where('email',$req->email)->where('password',$req->password)->get();
        $role=$data[0]->role;
        $id=$data[0]->id;
        $req->session()->put('id',$id);
        if($role=='user')
        {
            return redirect('home');
        }
        else
        {
            return redirect('admin_page');
        }
    }


    public function show()
    {
        
        $id=session('id');

        $data=DB::table('l1')->where('id',$id)->get();
        return view('data',['data'=>$data]);
        //return $data;
    }

    
     public function sho()
    {
        
        $td=l1::all();
        return view("data1",['td'=>$td]);
    }
}
