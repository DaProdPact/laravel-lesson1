<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }
    public function show($id){
        // $data = array(
        //     "id" => $id,
        //     "name" => "DaProdPact",
        //     "age" => 22,
        //     "email" => "daprodpact@gmail.com"
        // );
        // return view('user',$data);
        return view('user')
            ->with('name' , 'DaProdPact')
            ->with('age' , 22)
            ->with('email' , 'daprodpact@gmail.com')
            ->with('id' , $id);


    }
}
