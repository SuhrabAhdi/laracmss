<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(){
        
        $this->middleware('after')->only('index');
        $this->middleware('before')->except('profile');
    }
    public function index(){
   return "This is index method";
    }

    public function profile(){

return "This is profile method";
    }
    public function show(){

    }
}
