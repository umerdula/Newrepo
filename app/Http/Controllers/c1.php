<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class c1 extends Controller
{
    //
    public function gd(Request $res)
{
   //return "from data will be here ";
//    return $res ->input();

        $res->validate([
            'txtname'=>'required| max:10',
            'password'=>'required| min:5',
            'phone'=>'required| numeric|digits:10','txtnum'=>'required|digits_between:0,2'
        ]);
        $data=$res->input();
        return view('submit',['data'=>$data]);
}
public function lo()
    {
        Auth::logout();
        return redirect('login');
    }
}
