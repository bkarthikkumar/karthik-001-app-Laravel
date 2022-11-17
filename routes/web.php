<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    // return view('karthik'); // rooot url
    return redirect('contact');
});
// Route::get('/{name}', function ($name) {
//     // return view('welcome');
//     return view('karthik',['name'=>$name]); // rooot url
// });
Route::get('/about', function () {
    return view('about');
}); 
Route::get('/contact', function () {
    return view('contact'); 
});

//  new route for calling the controller 
Route::get('/usersData',[UserController::class,'show']);
