<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



class UserController extends Controller
{
    public function index(){
        return view('user');
    }
    public function register(){
        return view('user.register');
    }

    public function login(){
        return view('user.login');
    }

    public function process(Request $request){
        $validated = $request->validate([
            "email" => ['required','email'],
            "password" => 'required'
        ]);
        if(auth()->attempt($validated)){
            $request->session()->regenerate();
            return redirect('/employee')->with('message','welcomeback');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }


    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('message','Logout Succesful');


    }


    public function store(Request $request){
        $validated = $request->validate([
            "name" => ['required','min:4'],
            "email" => ['required','email',Rule::unique('users','email')],
            "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);

        return view('user.login');
        auth()->login($user);
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
