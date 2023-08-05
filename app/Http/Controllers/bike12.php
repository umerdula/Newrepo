<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\bike;

class bike12 extends Controller
{
    //  public function disp_data()
    // {
    //     $data=DB::table('bike')->get();
    //     return view('search',['data'=>$data1]);
    // } 

    // public function del_data($id)
    // {
    //     $res=DB::table('bike')->where('id',$id)->delete();
    //     return redirect('search');
    // }   

    // public function fetch_data($id)
    // {
    //     $data=DB::table('bike')->where('id',$id)->get();
    //     return view('editData',['data'=>$data1]);
    // }

    // public function update_data(Request $req)
    // {
    //     DB::table('bike')->where('id',$req->id)
    // ->update(['name'=>$req->name,'price'=>$req->price]);
    //     return redirect('search');
    // }

    // public function add_data(Request $req)
    // {
    //     $res=DB::table('bike')
    // ->insert(['name'=>$req->name,'price'=>$req->price]);
    //     return redirect('listData');
    // }
        
        public function getdata(Request $req)
        {
            $abc=new bike;
            $abc->name=$req->name;
            $abc->price=$req->price;
            $abc->color=$req->color;
            $abc->year=$req->year;
            $abc->vtype=$req->vtype;

            $abc->save();
            return redirect('listData');
        }

        public function fd()
        {
            $data=bike::all();
            return view('listData',['data'=>$data]);
        }

        public function ed($id)
        {
            $data=bike::find($id);
            return view('editData',['data'=>$data]);
        }

        public function ud(Request $req)
        {

            $data=bike::find($req->id);
            $data->name=$req->name;
             $data->price=$req->price;
             $data->color=$req->color;
             $data->year=$req->year;
             $data->vtype=$req->vtype;
             $data->save();
             return redirect('listData');
        }
        public function del($id)
        {
            $data=bike::find($id);
            $data->delete();
            return redirect('listData');
        }
}