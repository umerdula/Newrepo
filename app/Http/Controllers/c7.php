<?php

namespace App\Http\Controllers;
use \App\Models\tform;
use Illuminate\Http\Request;

class c7 extends Controller
{
   public function updateData(Request $req)
    {
        $tform=tform::find($req->id);
        $tform->name=$req->name;
        $tform->phoneno=$req->phoneno;
        $tform->address=$req->address;
        $tform->bookingdate=$req->bookingdate;
        $tform->bookingtime=$req->bookingtime;
        $tform->carname=$req->carname;
        $tform->carcolor='black';
        
        $tform->save();
        return redirect('tdDetails');
    }

    public function ed($id)
        {
            $data=tform::find($id);
            return view('submit',['data'=>$data]);
        }

    
   public function get(Request $req)
   {
         $tform=new tform;
        $tform->name=$req->name;
        $tform->phoneno=$req->phoneno;
        $tform->address=$req->address;
        $tform->bookingdate=$req->bookingdate;
        $tform->bookingtime=$req->bookingtime;
        $tform->carname=$req->carname;
        $tform->carcolor=$req->carcolor;
        $tform->save();
        return redirect('home');
   }
   public function show()
{
$data=tform::all();
return view("tdDetails",['data'=>$data]);
}
public function delete($id)
    {
        $data=tform::find($id);
        $data->delete();
        return redirect('tdDetails');
    }
}
