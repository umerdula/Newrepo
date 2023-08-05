<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;
class c4 extends Controller
{
    public function getdata(Request $req)
    {
        

        $car=new car;
        $car->name=$req->name;
        $car->modelyear=$req->modelyear;
        $car->colour=$req->colour;
        $car->battery=$req->battery;
        $car->topspeed=$req->topspeed;
        $car->charginghrs=$req->charginghrs;
        $car->price=$req->price;
        $car->arairange=$req->arairange;
        $car->bodytype=$req->bodytype;
        $car->fueltype=$req->fueltype;
        $car->noofseats=$req->noofseats;
        $car->save();
        return redirect("cardata");
    }

    public function show()
    {
        $car=car::all();
        return view("cardata",['car'=>$car]);

    }

    public function delete($id)
    {
        $car=car::find($id);
        $car->delete();
        return redirect('cardata');
    }

    public function fe($id)
    {
        $car=car::find($id);
        return view('caredit',['car'=>$car]);
    }

    public function up(Request $req)
    {
        $car=car::find($req->id);
        $car->name=$req->name;
        $car->modelyear=$req->modelyear;
        $car->colour=$req->colour;
        $car->battery=$req->battery;
        $car->topspeed=$req->topspeed;
        $car->charginghrs=$req->charginghrs;
        $car->price=$req->price;
        $car->arairange=$req->arairange;
        $car->bodytype=$req->bodytype;
        $car->fueltype=$req->fueltype;
        $car->noofseats=$req->noofseats;
        $car->save();
        return redirect("cardata");
    }
}
