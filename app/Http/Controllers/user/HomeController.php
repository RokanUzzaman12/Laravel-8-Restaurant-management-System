<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function redirects()
    {
        $usertype = Auth::user()->usertype;
        if($usertype==0){
            return view('home');
        }
        else{
            return view('admin.adminhome');
        }
    }
    
}
