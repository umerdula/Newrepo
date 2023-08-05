 <?php

namespace App\Http\Controllers;
use \App\Models\info;
use Illuminate\Http\Request;

class cured extends Controller
{
    public function getdata(Request $req)
    {
        $req->validate([
            'name'=>'required| max:10',
            'address'=>'required| min:4',
        ]);

        $info=new info;
        $info->name=$req->name;
        $info->address=$req->price;
        $info->dob=$req->dob;
        $info->save();
        return redirect("form");
    }

    public function show()
    {
        $data=info::all();
        return view("isdata",['data'=>$data]);

    }

    public function delete($id)
    {
        $data=info::find($id);
        $data->delete();
        return redirect('isdata');
    }

    public function fetchData($id)
    {
        $data=info::find($id);
        return view('editdata',['data'=>$data]);
    }

    public function updateData(Request $req)
    {
        $data=info::find($req->id);
        $data->name=$req->name;
        $data->address=$req->address;
        $data->dob=$req->dob;
        $data->save();
        return redirect("isdata");
    }
//  DB::table   
}
