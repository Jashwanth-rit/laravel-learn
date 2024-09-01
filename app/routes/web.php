<?php

use Illuminate\Support\Facades\Route;

//USING OF CONTRLLER BY CREATING CONTRLLER CLASS IN APP ->HTTP, 
use App\Http\Controllers\UserController;


//to check whther that page is exist or not
use Illuminate\Support\Facades\View;

//MIDDLEWARE IMPORT

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;


//CREATING ROUTER FOR CONTROLLER CLASS FUNCTION .
//HERE USER IS ROUTE NAME
//THEN WE SOULD PASS ARRAY ,
//FIRST ARGUMENT IS CLASS NMAE , SECOND ARGUMENT IS FUNCTION NAME.
// Route::get('user',[UserController::class,'getdata']);
// Route::get('aboutu',[UserController::class,'aboutuser']);



//PASSING IN ARGUMENTS FOR CONTRLLERS ROUTING
// Route::get('user/{name}',[UserController::class,'putdata']);



////CALLING OTHER PAGES OR ROUTE USING CONTROLLER AND VIEW
//A KIND OF REDICTING USING CONTROLLER AND VIEW 

//Route::get('callother',[UserController::class,'callother']);

//Route::get('callother/{name}',[UserController::class,'callother']);




//CALLING PAGE WHICH IS PRESENT IN OTHER FOLDER USING USERCONTROLLER -  BY SYNTAX - ADMIN.LOGIN - IN FILE NAME OF VIEW
//IN THE BELOW SYNTAX FIRST ARGUMENT IS NAME IN WHICH WE WISH TO SEARCH AND 
//SECOND ARGUMENT IS ARRAY CONSIST OF CONTROLLER NAME AND FUNCTION NAME

// Route::get('adminlogin',[UserController::class,'adminlogin']);



//CALLING PROFILE PAGE , TO LEARN PRINTING OF VARIABLES , FOR, FOREACH.

// Route::get('profile',[UserController::class,'profile']);




Route::get('/', function () {
    return view('welcome');
});


// Route::get('/about', function () {
//     return view('about');
// });


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

// Route::get('/work/{name}', function ($name) {
//     return view('work',['name'=>$name]);
// });




//FIRST METHOD FOR ROUTING

// Route::get('/work', function () {
//     return view('work');
// });
// Route::get('/massage', function () {
//     return view('components.massege-banner');
// });

//OR

//SECOND METHOD

//Route::view('/work','work');


// Route::get('/home', function () {
//     return view('home');
// });



//REDIRECTING HOME TO WELCOME PAGE , MEANS AS WE PRESS HOME SHOLD GO TO '/' ROUTE

//Route::redirect('/home','/');

//BASIC FORM AND CONNECING WITH USERCONTROLLER CONTROLLER

Route::view('/','welcome');
//Route::post('login',[UserController::class,'userdata']);

//Named routing 

//  Route::redirect('/home/user/end','/')->name('hm');

//  Route::view('/home/user','welcome')->name('user');


//  Route::view('/home/user','welcome')->name('hmw');

//USING USER-CONTROLLER

// Route::get('user',[UserController::class,'user']);
//Route::get('user',[UserController::class,'user']);


//GROUP ROUTING USING PREFIX

// Route::get("student/home",[UserController::class,'home']);
// Route::get("student/about",[UserController::class,'about']);

// Route::get("student/profile",[UserController::class,'profile']);


// Route::prefix('student')->group(function(){
//     Route::get("/home",[UserController::class,'home']);
// Route::get("/about",[UserController::class,'about']);

// Route::get("/profile",[UserController::class,'profile']);

// });


// GROUP ROUTING USING CONTROLLER 

// Route::controller(UserController::class)->group(function(){
//         Route::get("home",'home');
// Route::get("about",'about');

// Route::get("profile/{name}",'profile');

// });


//MIDDLEWARE- AGECHECK AND COUNTRY CHECK

//Route::view('/middleware','welcome')->middleware('check1');

//GROUPING OD MIDDLEWARE - GLOBAL MIDDLEWARE WHICH IS CHECKED IN APP-PHP IN BOOTSTARP

// Route::middleware('check1')->group(function(){
//             Route::get("home",'home');
// Route::get("about",'about');

// Route::get("profile/{name}",'profile');



// });

//NON-GLOBAL MIDDLEWARE DIRECTUSAGE OF MIDDLEWARE


// Route::view('/middleware','welcome')->middleware(AgeCheck::class,CountryCheck::class);


//CONNECTING WITH DATABASE

//Route::get('',[UserController::class,'users']);

// MVC - MODEL VIEW CONTROLLER 

// CREATE A MODEL VIEW AND CONTROLLER THEN USE IT AS I DOING NOW 

//Route::get('',[UserController::class,'users']);

//HTTPcLIENT 

//Route::get('',[UserController::class,'users']);

//QUERRY BIULDING - MEANS ADDING QUERRY TO GET SPECIFIED DATA

//Route::get('',[UserController::class,'users']);

//// insert data to data base using table ot form and models

// Route::view('','welcome');

// Route::post('',[UserController::class,'users']);

//getting data from database and display it on screen

//Route::get('',[UserController::class,'getusers']);


//delete data from database through user

//Route::get('delete/{id}',[UserController::class,'delete']);

//POPULATING DATA ONCLICK OF EDIT TO UPDATE PAGE

//Route::get('edit/{id}',[UserController::class,'edit']);

//UPDATE OF DATA USING ONCLICK OF EDIT USING POPULATE

// Route::post('update/{id}',[UserController::class,'users']);

//APLLYING SEARCH BAR TO SEARCH DATA USING NAME

// Route::get('search',[UserController::class,'search']);


//DELETING LIST OF DATA USING CHECK BOX


// Route::post('delete-list',[UserController::class,'delete_list']);


//UPLOAD FILE TO DATA BASE

//Route::view('upload','welocome');

//post image address to data base 

//Route::post('upload',[UserController::class,'upload']);

//get image address form data base and display it on screen


//Route::get('',[UserController::class,'list']);


//add data to session and using it for display

//Route::post('session_put',[UserController::class,'session_put']);


//to delete session data we need to logout , 

//Route::get('logout',[UserController::class,'logout']);

//localization showing in language in which u needed

// Route::get('change/{id}',function($id){
//     App::setLocale($id);
//     return view('welcome');
// });

//ACCESSORS TO DATA OF STUDENTS - MAKING ROUTE 

// Route::get('modify_data',[UserController::class,'modify']);

//MUTATORS TO DATA BEFORE WE ADD TO DATA BASE

// Route::get('modify_dataB',[UserController::class,'modifyB']);

//ONE - ONE RELATION BETWEEN TABLE  GETTING THE DATA OF OTHER TABLE WHICH IS IN RELATION WITH OTHER

// Route::get('one-one',[UserController::class,'getone_one_related_data']);

//ONE - ONE RELATION BETWEEN TABLE  GETTING THE DATA OF OTHER TABLE WHICH IS IN RELATION WITH OTHER

// Route::get('one-many',[UserController::class,'getone_many_related_data']);

//many - ONE RELATION BETWEEN TABLE  GETTING THE DATA OF OTHER TABLE WHICH IS IN RELATION WITH OTHER

Route::get('many-one',[UserController::class,'getmany_one_related_data']);


