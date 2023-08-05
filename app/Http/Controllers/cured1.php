<?php

namespace App\Http\Controllers;
use Illuminate\http\Request;
use App\Models\login;
use Illuminate\support\facades\DB;
use session;
// use Illuminate\Http\Request;

class cured1 extends Controller
{
   // public function disp_data()
   // {
   //      $data =DB::table('info')
   //      ->where('id','>',2)
   //      ->get();
   //      return $data;
   // }
   // update 
   // DB::table('info')->where('id',$req->id)
   // ->update(['name'=>$req->name,'address' =>$req->address]);
   // return redirect('search');

   function getdata(Request $req)
   {
        return $req->name;
    //    $data=DB::table('admin')->where('name',$req->name)
    //    ->where('password',$req->password)->get();
    //    if($data->isNotEmpty())
    //    {
    //        $req->session()->put('name',$req->name);
    //        return  redirect('home1');
    //    }
    //    else{
    //        return redirect()->back()->withErrors
    //        (['failure' => 'Invalid name and password']);;
    //    }
// return view('alogin',['data'=>$data]);
       // $data=new data;
       // $data->name=$req->name;
       // $data->email=$req->email;
       // $data->password=$req->password;
       
    
   }

   public function show()
   {
        $data=DB::table('login')->select('name','email','password');
    //    $data=login::all();
       return view('home',['data'=>$data]);

   }

  // public function add(Request $req)
  // {
       //$fileName = $req->file('images')->getClientOriginalName();
      // return $req->name; 
    //    $destinationPath='img';
    //    $req->file->move(public_path($destinationPath),$fileName);
    //    if(DB::table('produc')->insert(['name'=>$req->name,'image'=>$fileName]))
    //    {
    //        return redirect()->back()->with('success','success message');
    //    }

    //    else{
    //        return redirect()->back()->with('success','failure message');
    //    }
   //}
}
// using whereBetween you can display two data between values pass two argumen