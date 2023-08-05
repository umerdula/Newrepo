<?php

namespace App\Http\Controllers;
use \App\Models\login;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class c3 extends Controller
{
 //    public function insert(Request $req)
 //    {
 //        $login=new login;
 //        $login->name=$req->name;
 //        $login->phoneno=$req->phoneno;
 //        $login->email=$req->email;
 //        $login->password=$req->password;
 //        $login->save();
 //        return redirect('login');
 //    }
 //    public function login(Request $req )
 //    {
 //        $data=DB::table('login')->where('email',$req->email)->where('password',$req->password)->get();
 //        $role=$data[0]->role;
 //        if($role=='user')
 //        {
            
 //            return redirect("home");
 //        }
 //        else
 //        {
            
 //            return redirect("home1");
 //        }
 //    }
 //    public function show()
 //    {
 //        $data=login::all();
 //        return view("data",['data'=>$data]);
 //    }
 //       public function add(Request $req)
 //       {
 //        $fileName = $req->file('images')->getClientOriginalName();
 //       //return $fileName; 
 //       $destinationPath='images';
 //       $req->file('images')->move(public_path($destinationPath),$fileName);
 //       if(DB::table('produc')->insert(['name'=>$req->name,'image'=>$fileName]))
 //       {
 //           return redirect()->back()->with('success','success message');
 //       }

 //       else{
 //           return redirect()->back()->with('success','failure message');
 //       }

 //       }

 //       public function search()
	// {
	// 	$d=DB::table('produc')->get();
	// 	return redirect('image',['d'=>$d]);
	// }

}
