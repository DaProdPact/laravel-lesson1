<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }

    public function about(){
        return view('about')->with('information' , 'laravelnumbawan');
    }
    public function show($id){
        // $data = array(
        //     "id" => $id,
        //     "name" => "DaProdPact",
        //     "age" => 22,
        //     "email" => "daprodpact@gmail.com"
        // );
        // return view('user',$data);
        $data = ["data" => "dataformdatabase"];
        return view('user')
            ->with('data' , $data)
            ->with('name' , 'DaProdPact')
            ->with('age' , 22)
            ->with('email' , 'daprodpact@gmail.com')
            ->with('id' , $id);


    }

}
