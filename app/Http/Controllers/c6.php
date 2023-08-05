<?php

namespace App\Http\Controllers;
use \App\Models\produc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class c6 extends Controller
{
 public function add(Request $req)
       {
        $fileName = $req->file('images')->getClientOriginalName();
       //return $fileName; 
       $destinationPath='images';
       $req->file('images')->move(public_path($destinationPath),$fileName);
       if(DB::table('produc')->insert(['name'=>$req->name,'image'=>$fileName,'carname'=>$req->carname,'modelyear'=>$req->modelyear,'colour'=>$req->colour,'battery'=>$req->battery,'topspeed'=>$req->topspeed,'charginghrs'=>$req->charginghrs,'price'=>$req->price,'arairange'=>$req->arairange,'bodytype'=>$req->bodytype,'fueltype'=>$req->fueltype,'noofseats'=>$req->noofseats]))
       {
           return redirect()->back()->with('success','Image Added Successfully');
       }

       else{
           return redirect()->back()->with('success','Error!!!');
       }

       }

       public function search1()
    {
        $data=DB::table('produc')->get();
        //return $data;

        return view('manage',['data'=>$data]);
    }

     public function delete($id)
    {
        $produc=produc::find($id);
        $produc->delete();
        return redirect('home');
    }
    
    public function search()
    {
        $data=DB::table('produc')->get();
        return view('home',['data'=>$data]);
    }

    public function search_name(Request $req)
    {
        $name=$req->search;
        $data=DB::table('produc')->where('name','LIKE','%'.$name.'%')->get();
        return view('home',['data'=>$data]);
    }

    public function get_detail($id)
    {
        $data=DB::table('produc')->where('id',$id)->get();
       // return $data;
        return view('b4',['data'=>$data]);   
    }

     public function delete2($id)
    {
        $data=produc::find($id);
        $data->delete();
        return redirect('manage');
    }

 public function edd2($id)
        {
            $data=produc::find($id);
            return view('idata',['data'=>$data]);
        }
    
    
    public function update2(Request $req)
    {
        
        $produc=produc::find($req->id);
        $produc->name=$req->name;
        $produc->carname=$req->carname;
        $produc->modelyear=$req->modelyear;
        $produc->colour=$req->colour;
        $produc->battry=$req->battry;
        $produc->topspeed=$req->topspeed;
        $produc->charginghrs=$req->charginghrs;
        $produc->price=$req->price;
        $produc->arairange=$req->arairange;
        $produc->bodytype=$req->bodytype;
        $produc->fueltype=$req->fueltype;
        $produc->noofseats=$req->noofseats;
        
        $produc->save();
        return redirect('manage');
    
       // return redirect('manage');
    }

}
