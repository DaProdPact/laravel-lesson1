<?php

namespace App\Http\Controllers;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        // getalldata
        $data = Employees::all();

        return view('employee', ['employees' => $data]);


    }
}
