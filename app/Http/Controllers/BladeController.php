<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index($name="World"){
       $param = [
           'name'=>$name,
           'login'=>false,
           'roots'=>[1,2,3,4,5]
       ];
        return view('blades')->with($param);
    }

    public function about(){
        return view('about');
    }
}
