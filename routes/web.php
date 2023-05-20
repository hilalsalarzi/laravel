<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
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

Route::get('/',[DemoController::class,'index']);
Route::get('/about','App\Http\Controllers\DemoController@about');
Route::get('/course',SingleActionController::class);
Route::resource('/photo',PhotoController::class);
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/course', function () {
    return view('course');
});





// routing 
// Route::get("/routing",function(){
// echo "hello sir";
// });
// route::get("/routing/{name}/{id?}",function($name,$id=null){
//   $data=compact('name','id');
//   return view('routing')->with($data);
//   print_r($data);
// });
// routing ?
// blade 

// Route::get("/home/{name?}",function($name=null){
   
//     $demo="demo";
//      $home=compact('name','demo');
 
//     return view('home')->with($home);

// });
// blade 
