<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\fetchApiData;


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
    return view('home');
});
/*Route::get('/about', function () {
    return view('about');
}); */
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/home/{username}', function ($username) {
	//echo $username;
    return view('home',['username'=>$username]);
});
//Route::get("/about/{username}",[UserController::class,'showdata']); 
Route::get("/contact/{contact}",[UserController::class,'showContactData']); 
Route::get("/about",[UserController::class,'showUserData']); 
Route::view("/laravelhtmlform",'laravelhtmlform');
Route::post("/laravelhtmlformdata",[UserController::class,'getData']);
//Route::get("/apidata",[fetchApiData::class,'fetachJsonData']);
Route::get('/usemiddleware', function () {
    return view('usemiddleware');
});
Route::get('/noaccess', function () {
    return view('noaccess');
});
Route::group(['middleware'=>['protectedPage']],function()
{
    Route::view('service','service');
    Route::view('about','about');
   
});
Route::get("/fetchapidata",[fetchApiData::class,'fetachJsonData']);
//Route::view('userlogin','userlogin');
Route::view('profile','profile');
Route::get('/logout', function () {
    if(session()->has('userid'))
    {
        session()->pull('userid',null);
    }
    return redirect('userlogin');
});
Route::get('/userlogin', function () {
    if(session()->has('userid'))
    {
        return redirect('profile');
        //session()->pull('userid',null);
    }
    return view('userlogin');
});
Route::get('/profile', function () {
    if(session()->has('userid'))
    {
        return view('profile');
        //session()->pull('userid',null);
    }
    return redirect('userlogin');
});
Route::post("/userLoginCheck",[UserController::class,'userLoginCheck']);
Route::get('/flashsession', function () {
    
        return view('flashsession');
});

Route::post("/flashSessionData",[UserController::class,'flashSessionData']);
Route::get("/showdatafromdb",[UserController::class,'showDataFromDb']);
Route::get("/modelViewController",[UserController::class,'modelViewController']);
Route::get('/addform', function () {
    return view('addform');
});
Route::post("/saveDataDb",[UserController::class,'saveDataDb']);
Route::get("/edit/{id}",[UserController::class,'showDataEdit']);
Route::POST("/updateData1",[UserController::class,'updateData1']);
Route::get("/delete/{id}",[UserController::class,'delete']);
Route::get("/showonetoonedata",[UserController::class,'showOneToOneData']);
//Route::view('fetchapidata','fetchapidata');