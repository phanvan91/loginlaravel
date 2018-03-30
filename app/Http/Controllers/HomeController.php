<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth',['except'=>'logout']);
//    }
    public function getindex ()
    {
        return view('home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(\URL::previous());
    }
}
