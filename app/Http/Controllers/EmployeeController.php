<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Supervisors;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        // $employees = Employees::all();
        // $supervisors = Supervisors::all();
        // return view('employees.index',['supervisors' => $supervisors,'employees' => $employees]);

        $data = array("employees" => DB::table('employees')->orderBy('last_name','asc') -> simplePaginate(10));

        return view('employees.index', $data);

    }

    public function create(){
        return view('employees.create');
    }

    
    public function show($id){
        $data = Employees::findOrFail($id);
        // dd($data);
        return view('employees.edit', ['employees' => $data]);
    }

        
    public function update(Request $request, Employees $employee){

        // dd($data);
          $validated = $request->validate([
            "first_name" => ['required','min:4'],
            "last_name" => ['required','min:4'],
            "birthdate" => ['required'],
            "supervisor_id" => ['required'],
        ]);
        $employee->update($validated);   

        return back()->with('message','Updated');
        // $data = Employees::findOrFail($id);
        // dd($data);
        // return view('employees.edit', ['employees' => $data]);
    }

    public function destroy(Request $request, Employees $employee){
        $employee->delete();   
        return redirect('/employee')->with('message','Delete Succesfully');
    }

    public function store(Request $request){
            $validated = $request->validate([
                "first_name" => ['required','min:4'],
                "last_name" => ['required','min:4'],
                "birthdate" => ['required'],
                "supervisor_id" => ['required'],


            ]);
            Employees::create($validated);

            return redirect('/employee')->with('message','New Employee was added successfully');
    }


    public function employee(){



        return view('employees.create');
        // $employees = Employees::all();
        // $supervisors = Supervisors::all();


        // return view('employees.index',['supervisors' => $supervisors,'employees' => $employees]);
    }
    

}
