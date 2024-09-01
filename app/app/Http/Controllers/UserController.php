<?php

//created usercontroller class in controller by -  php artisan make:controller UserController
namespace App\Http\Controllers;

use App\Models\image;

use Illuminate\Http\Request;

//IMPORTING DATABASE 

use Illuminate\Support\Facades\DB;

//IMPORTING HTTP CLIENT 
use Illuminate\Support\facades\Http;

//IMPORTING MODEL FROM MODEL-STUDENT

use App\Models\student;
use App\Models\product;

//DEFINING VARIOUS FUNCTION IN uSERCONTROLLER CLASS AND USING THEM IN WEB.PHP FOR ROUTING

class UserController extends Controller
{
    

    //SEE WEB.PHP FOR MORE UNDERSTANDING

   //  function getdata(){
   //     echo "<h1>hello,</h1>";
   //     return 'jk';
   //  }
   //  function putdata($name){
   //     echo "<h1>hello, ".$name."</h1>";
   //  }


    //CALLING OTHER PAGES OR ROUTE USING CONTROLLER AND VIEW
    // function callother(){
    //     return view('welcome');
    // }


 //CALLING OTHER PAGES OR ROUTE USING CONTROLLER AND VIEW
 //AND PASSING ARGUMENTS FOR THAT TO DISPLAY

    // function callother($name){
    //     return view('welcome',['name'=>$name]);
    // }


   //  function aboutuser(){
   //      echo "<h1>pk</h1>";
   //      return "pk";
   //  }

   //  function adminlogin(){
   //     return view('admin.login');
   //  }

   //  function profile(){

   //      $name = 'jk';
   //      $users = ['jk','pk','ak'];
   //      return view('profile',['name'=>$name],['users'=>$users]);
   //   }

   //BASIC FORM AND ACCESSING VALUES OF FORM AND POST

//    function userdata(Request $req){
//       $req->validate([
//          'name'=>'required | min:2 | max:100',
//          'email'=>'required | email',
//          'password'=>'required | min:10 ',
//          'city'=>'required | uppercase',
//          'gender'=>'required',
//          'age'=>'required',
         

//       ],
//       //how to change massege
//       [
// 'name'.'required'=>'name can not be empty',
// 'name'.'required'.'min'=>'name can not be less than 2 character',
// 'password'.'required'.'min'=>'password can not be less than 10 character'

//       ]);
// return $req;
//    }


// NAMED ROUTING USING uSERCONTROLLER

// function user(){
//    return to_route('user',['name'=>'jk']);
// }

//GORUPED ROUTING USING PREFIX

function home(){
   return view('home');
}

function profile(){
   return view('profile');
}

function about(){
   return view('about');
}

// function users(){
//    $user =  DB::select('select * from students');
//    return view("welcome",['users'=>$user]);
//    //return DB::select('select * from students');
// }

//USING MODEL VIEW CONTROLLER

// function users(){
//    $user =  \App\Models\student::all();
//    return view("welcome",['users'=>$user]);
//    //return DB::select('select * from students');
// }

//HTTPCLIETN MAKING AND GET FROM API

// function users(){

//    $response = Http::get('http://localhost:3000/students');
//    echo "this is made to http";
//    //return $response;

//    return view('welcome',['data'=>json_decode($response)]);
// }

//function users(){


   //$user =  DB::table('students')->get();


   //to get rank equal to one
   // $user =  DB::table('students')->where('rank',1)->get();
   // return view("welcome",['users'=>json_decode($user)]);

   //to insert

   // $res =  DB::table('students')->insert([
   //    'name'=>"jk",
   //    'id'=>1,
   //    "city"=>'benki',
   //    "marks"=>200,
   //    "rank"=>30]);

   // if($res){
   //    echo "yes that is success";

   // }
   // else{
   //    die("very sad");
   // }

   // to update 
   

   // $res =  DB::table('students')->where('rank',10000)->update([
   //    'name'=>"pk",
   //    'id'=>1,
   //    "city"=>'benki',
   //    "marks"=>200,
   //    "rank"=>1]);

   // if($res){
   //    echo "yes that is success to update";

   // }
   // else{
   //    die("very sad");
   // }

   //to delete

   // $res =  DB::table('students')->where('name','kk')->delete();

   // if($res){
   //    echo "yes that is success to delete";

   // }
   // else{
   //    die("very sad");
   // }



// }


//GET DATA  FROM USING MODELS - ELOQUENT MODEL QUERRY

// function users(){
//    $response1 = student::all();
//    $response2 = student::get();

//    //both are same
//    echo $response1;
//    echo $response2;

//    //to get rank is 1

//    $response1 = student::where('rank',1)->get();

//    //to insert


// $res = student::insert(['name'=>"uk",
// "id"=>30,
// 'city'=>'bankock',
// 'rank'=>10,
// 'marks'=>20]);

//   if($res){
//       echo "yes that is success";

//    }
//    else{
//       die("very sad");
//    }


//    //followed by update and delete

//    return view('welcome',['users'=>\json_decode($response1)]);

// }

// insert data to data base using table ot form and models



// function users(Request $req){
//   $students =  new student();
//   $students->name = $req->name;
//   $students->id = $req->id;
//   $students->city = $req->city;
//   $students->rank = $req->rank;
//   $students->marks = $req->marks;
//   $students->save();
//   if($students){
//    return "success";

//   }
//   else{
//    return "no";
//   }

// }

// to get 

// function getusers(){
//    $students =  student::all();
//   return view('welcome',['students'=>$students]);
 
//  }

// to delete 

// function delete($id){

//    $isDelete = student::destroy($id);

//    if($isDelete){
//       return redirect("/");
//    }
// }

// //POPULATING DATA ONCLICK OF EDIT TO UPDATE PAGE

// function edit($id){

//    $students =  student::find($id);
//      return view('update',['students'=>$students]);

// }

// //UPDATE OF DATA USING ONCLICK OF EDIT USING POPULATE
 
// function users(Request $req,$id){
    
//    $students =  student::find($id);
//    $students->name = $req->name;
//    $students->city = $req->city;
//    $students->marks = $req->marks;
//    $students->rank = $req->rank;
//    $students->save();

//    if($students->save()){
//       return redirect('/');
//    }
//    else{
//       return "update of user not done";
//    }


  
// }
// //APLLYING SEARCH BAR TO SEARCH DATA USING NAME
// function search(Request $req){
//    $students = student::where('name','like',"%$req->search%")->get();
//    return view('welcome',['students'=>$students,'search'=>$req->search]);
// }

// // APPLY PAGINATION TO DATA COMING FROM DATABASE - PAGNATION MEANS SPECIFING NUMBER OF DATA WE WISH TO GET ON PAGE 

// function getusers(){
//    $students =  student::paginate(5);
//   return view('welcome',['students'=>$students]);
 
//  }

//  //DELETING LIST OF DATA USING CHECK BOX

//  function delete_list(Request $req){
//    student::destroy($req->ids);
//    return redirect("/");
//  }

//  //UPLOAD FILE TO DATABASE

//  function upload(Request $req){
//    $path = $req->file('file')->store('public');
//    $pathArray = explode('/',$path);
//    $imgpath = $pathArray[1];

//    //CALLING DATABASE AND UPLOADING IMAGE address TO DATABASE
//    $img = new image();
//    $img->path = $imgpath;
// $img->save();
//    return redirect('/');
//  }

// //  get list of address of image and display it on screen 

//  function list(){
//    $img = image::all();
//    return view('welcome',['images'=>$img]);
//  }

//  //add data to session and using it display

//  function session_put(Request $req){

// // flash data is used only to display the msg at that page not be used in any other pages like session data 

//    $req->session()->flash('msg','session data updated successfully');

//    $req->session()->put('data',$req->input());
   
//    return redirect('/');
//  }

// //  to logout or delete data from session 

//  function logout(){
//    session()->pull('data');
//    return redirect('/');
//  }

 //ACCESSIRS TO DATA OF STUDENTS

 function modify(){
   return student::all();
 }

 //MUTATORS TO DATA BEFORE WE ADD TO DATA BASE

 function modifyB(){
   $stu = new student();
   $stu->name = 'jk';
   $stu->id = 30;
   $stu->city = 'hsn';
   $stu->rank = 23;
   $stu->marks = 100;
   if($student->saves()){
      return "success";

   }
   return 'failed';
}

//ONE - ONE RELATION BETWEEN TABLE  GETTING THE DATA OF OTHER TABLE WHICH IS IN RELATION WITH OTHER

function getone_one_related_data(){
   // GETTING THE PRODUCT SOLD BY THE PERSON WHOSE ID IS 1
   return student::find(1)->getprod_one_one;
}
//ONE - MANY RELATION BETWEEN TABLE  GETTING THE DATA OF OTHER TABLE WHICH IS IN RELATION WITH OTHER

function getone_many_related_data(){
   // GETTING THE PRODUCT SOLD BY THE PERSON WHOSE ID IS 1
   return student::find(1)->getprod_one_many;
}

// MANY-ONE RELATION BETWEEN TABLE  GETTING THE DATA OF OTHER TABLE WHICH IS IN RELATION WITH OTHER

function getmany_one_related_data(){
   // GETTING THE seller 
   $data =  product::with('getprod_many_one')->get();
   return $data;
   //return product::find('jk')->getprod_many_one;
}

function getproducts(){
  return product::all();
}

function postproducts(Request $req) {

   // applying validation 
   // $rules = array(
   //    'name'=>'required | min:2 | max:10'
   // );
   // $validation = validator::make($req->all(),$rules);


   // if($validation->failed()){
   //    return $validation->error();
   // }
   
   $add = new product();
   $add->id = $req->id;
   $add->name = $req->name;
   $add->seller_id = $req->seller_id;
   $add->cost = $req->cost;
  
   echo  $add->name;
   echo $add->seller_id;
   echo  $add->cost;
   //echo  $add->save();
   if ($add->save()) {
       return ["result"=>"product added"];
   } else {
      return ["result"=>"operation failed"];
   }
}


function update(Request $req) {

   
   $add =  product::find($res->id);
   
   $add->name = $req->name;
   $add->seller_id = $req->seller_id;
   $add->cost = $req->cost;
  
   echo  $add->name;
   echo $add->seller_id;
   echo  $add->cost;
   //echo  $add->save();
   if ($add->save()) {
       return ["result"=>"product added"];
   } else {
      return ["result"=>"operation failed"];
   }
}
function delete($id){
   $dlt = product::destroy($id);
   if($dlt){
      return "success";

   }
   else{
      return " nope";
   }
}

}
