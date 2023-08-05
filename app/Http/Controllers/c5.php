<?php

namespace App\Http\Controllers;
use \App\Models\rform;
use Illuminate\Http\Request;

class c5 extends Controller
{

    public function update(Request $req)
    {
        $data=rform::find($req->id);
        $data->name=$req->name;
        $data->phoneno=$req->phoneno;
        $data->address=$req->address;
        $data->carname=$req->carname;
        $data->bookingdate=$req->bookingdate;
        $data->returndate=$req->returndate;
        $data->bookingtime=$req->bookingtime;
        $data->returntime=$req->returntime; 
        $data->save();
        return redirect('rvDetails');
    }

    public function edd($id)
        {
            $data=rform::find($id);
            return view('rdata',['data'=>$data]);
        }




 public function getform(Request $req)
    {
        $rform=new rform;
        $rform->name=$req->name;
        $rform->phoneno=$req->phoneno;
        $rform->address=$req->address;
        $rform->carname=$req->carname;
        $rform->bookingdate=$req->bookingdate;
        $rform->returndate=$req->returndate;
        $rform->bookingtime=$req->bookingtime;
        $rform->returntime=$req->returntime;
        
        $rform->save();
        return redirect('home');
    }

public function show()
    {
        $data=rform::all();
        return view("rvDetails",['data'=>$data]);
    }

    public function delete($id)
    {
        $data=rform::find($id);
        $data->delete();
                return redirect('rvDetails');

    }

    
}
