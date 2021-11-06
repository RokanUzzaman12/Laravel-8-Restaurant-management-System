<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function users()
    {
        $datas = User::all();
        return view('admin.user',compact('datas'));
    }

    public function deleteuser($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('user_delete','User has been Deleted');
    }


}
