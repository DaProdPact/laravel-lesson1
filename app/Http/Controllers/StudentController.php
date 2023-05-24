<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){

        // getalldata
        // $data = Students::all();

        //filterdata
        // $data = Students::where('gender', 'Male')->get();

        // // like or wildcard
        // $data = Students::where('first_name', 'like' , '%c%')->get();

        // operations
        // $data = Students::where('age', '>' , 19)->get();

        //orderby and limit
        // $data = Students::where('age', '>' , 19)->orderBy('first_name','asc')->limit(2)->get();

        // //Groupby Count
        // $data = DB::table('students')
        // ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();
       


        // notfoundexception

        $data = Students::where('id', 5)->firstOrFail()->get();
        
        return view('students.index', ['students' => $data]);

    }

    public function show($id){

        $data = Students::findOrFail($id);
        // dd($data);
        return view('students.index', ['students' => $data]);
    }
}
