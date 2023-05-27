<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;


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
    

// Route::get('/',function(){
//     return 'Welcome !';
// });

Route::get('/', [UserController::class,'login']);

Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');;
Route::post('/login/process', [UserController::class,'process']);


Route::get('/register', [UserController::class,'register']);
Route::post('/store', [UserController::class,'store']);
Route::post('/logout', [UserController::class,'logout']);


Route::controller(EmployeeController::class)->group(function(){

  Route::get('/add/employee','create');
  Route::post('/add/employee','store');
  Route::get('/employee/{employee}','show');
  Route::put('/employee/{employee}','update');
  Route::delete('/employee/{employee}','destroy');

});





// Route::get('/users/{id}', [UserController::class,'show']);
// Route::get('/about', [UserController::class,'about']);
// // Route::get('/students', [StudentController::class,'index']);
// Route::get('/student/{id}', [StudentController::class,'show']);

// Route::get('/employee',[EmployeeController::class,'index']);

Route::get('/employee',[EmployeeController::class,'index'])->middleware('auth');
// Route::get('/date',[EmployeeController::class,'index']);
















// Route::redirect('/welcome' , '/' );

// Route::get('/users',function(Request $request){
//     dd($request);
//     return null;
// });

// Route::get('/get-text',function(){
//     return response()->json(['name' => 'arjhen' , 'age' => '22']);
//                 // ->header('Content-Type' , 'text/plain');
// });

// Route::get('/get-download',function(){
//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $header = array(
//         'Content-Type : application/text-plain',
//     );
    
//     return response()->download($path,$name,$header);
//                 // ->header('Content-Type' , 'text/plain');

// });


// Route::get('/', function () {
//     return view('index');
// });
// // Route::get('/user', function () {
// //     return view('user');
// // });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/employee', function () {
//     return view('user');
// });


