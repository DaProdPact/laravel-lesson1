<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Routes : 
// Route::get();
// Route::post();
// Route:put();
// Route::patch();
// Route::delete();
// Route::options();

// Route::match(['get' , 'post'], '/', function(){
//     return 'POST AND GET ALLOWED';
// });
    

Route::get('/',function(){
    return 'Welcome ! ';
});
// Route::redirect('/welcome' , '/' );

Route::get('/users',function(Request $request){
    dd($request);
    return null;
});

Route::get('/get-text',function(){
    return response()->json(['name' => 'arjhen' , 'age' => '22']);
                // ->header('Content-Type' , 'text/plain');
});

Route::get('/get-download',function(){
    $path = public_path().'/sample.txt';
    $name = 'sample.txt';
    $header = array(
        'Content-Type : application/text-plain',
    );
    
    return response()->download($path,$name,$header);
                // ->header('Content-Type' , 'text/plain');
});