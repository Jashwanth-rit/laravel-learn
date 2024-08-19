<?php

use Illuminate\Support\Facades\Route;

//USING OF CONTRLLER BY CREATING CONTRLLER CLASS IN APP ->HTTP, 
use App\Http\Controllers\UserController;


//to check whther that page is exist or not
use Illuminate\Support\Facades\View;


//CREATING ROUTER FOR CONTROLLER CLASS FUNCTION .
//HERE USER IS ROUTE NAME
//THEN WE SOULD PASS ARRAY ,
//FIRST ARGUMENT IS CLASS NMAE , SECOND ARGUMENT IS FUNCTION NAME.
Route::get('user',[UserController::class,'getdata']);
Route::get('aboutu',[UserController::class,'aboutuser']);



//PASSING IN ARGUMENTS FOR CONTRLLERS ROUTING
Route::get('user/{name}',[UserController::class,'putdata']);



////CALLING OTHER PAGES OR ROUTE USING CONTROLLER AND VIEW
//A KIND OF REDICTING USING CONTROLLER AND VIEW 

//Route::get('callother',[UserController::class,'callother']);

//Route::get('callother/{name}',[UserController::class,'callother']);




//CALLING PAGE WHICH IS PRESENT IN OTHER FOLDER USING USERCONTROLLER -  BY SYNTAX - ADMIN.LOGIN - IN FILE NAME OF VIEW
//IN THE BELOW SYNTAX FIRST ARGUMENT IS NAME IN WHICH WE WISH TO SEARCH AND 
//SECOND ARGUMENT IS ARRAY CONSIST OF CONTROLLER NAME AND FUNCTION NAME

Route::get('adminlogin',[UserController::class,'adminlogin']);



//CALLING PROFILE PAGE , TO LEARN PRINTING OF VARIABLES , FOR, FOREACH.

Route::get('profile',[UserController::class,'profile']);




Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});


// Route::get('/profile', function () {
//     return view('profile');
// });


// Route::get('/login', function () {

//     if(View::exists('admin.login')){
//         return view('admin.login');
//     }
//    else{
//     echo "page not exists";
//    }
// });

//PASSING ARGUMENTS BY LINK and using in pages , to see go to work page
//USING THIS VARIABLE IN pAGES

Route::get('/work/{name}', function ($name) {
    return view('work',['name'=>$name]);
});




//FIRST METHOD FOR ROUTING

Route::get('/work', function () {
    return view('work');
});
Route::get('/massage', function () {
    return view('components.massege-banner');
});

//OR

//SECOND METHOD

//Route::view('/work','work');


Route::get('/home', function () {
    return view('home');
});



//REDIRECTING HOME TO WELCOME PAGE , MEANS AS WE PRESS HOME SHOLD GO TO '/' ROUTE

//Route::redirect('/home','/');

//BASIC FORM AND CONNECING WITH USERCONTROLLER CONTROLLER

Route::view('/','welcome');
Route::post('login',[UserController::class,'userdata']);

