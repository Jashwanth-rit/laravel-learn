<?php

//created usercontroller class in controller by -  php artisan make:controller UserController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

   function userdata(Request $req){
      $req->validate([
         'name'=>'required | min:2 | max:100',
         'email'=>'required | email',
         'password'=>'required | min:10 ',
         'city'=>'required | uppercase',
         'gender'=>'required',
         'age'=>'required',
         

      ],
      //how to change massege
      [
'name'.'required'=>'name can not be empty',
'name'.'required'.'min'=>'name can not be less than 2 character',
'password'.'required'.'min'=>'password can not be less than 10 character'

      ]);
return $req;
   }

}
