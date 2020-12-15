<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        return "Congratulation. Your account has successfully been created!";
    }

    public function create(){
$param = [
    'title'=>'User Registeration'
];
        return view('users.create')->with($param);
    }

    public function store(Request $request){
        $request->validate([
            'username'=>'required|alpha_dash',
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);

        return redirect()->route('users.index');
    }
}
