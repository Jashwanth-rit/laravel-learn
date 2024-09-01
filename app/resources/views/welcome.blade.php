

{{-- <!-- //IMPORTING TWO OR MORE FILES USING INCLUDE -->
 <!-- HERE IF IS ADDED TO CHECK WHETHER IT EXISTS OR NOT , AND TO PREVENT ERROR -->
<!-- @includeIf('admin.header') -->


<!-- USING COMPONENET AND PRINTING HERE , BY IMPORTING IN TAG - FOR MORE INFO GOTO MASSAGE-BANNER FILE -->
<!-- <x-massege-banner msg = "this is massage page helping for welcome page"/>


<h1>hello laravel!!</h1> -->

<!-- <h3>Click on home to redirect to same welcome page!!</h3>
<ul>
<li><a href="/home">home</a></li> -->

<!-- NOTE : WHILE PASSING ARGUMENT IN LINK URL
IN ANCHOR TAG - DONT USE BRACKET
IN ROUTE  - USE BRACKET SINGLE AND ASSIGN VARIBLE LIKE ASSOCIATIVE ARRAY -->

<!-- NOTE : WITHOUT ASSIGNING IN ROUTE DONT USE LINK HERE , FIRST ASSIGN ROUTE THEN USE LINK -->

<!-- <li><a href="/work/jk">work with name</a></li>
<li><a href="/work">work</a></li>
<li><a href="/profile">profile</a></li>
<li><a href="/about">about</a></li>
</ul> -->

<!-- PASSING ARGUMENTS THROUGH INCLUDE TO FOOTER PAGE -->

<!-- @includeIf('admin.footer',['page'=>'this is footer']) -->



<!-- //FORMS AND INPUT FIELDS IN LARAVEL  -->


<!-- <span> * Indicates required</span>
<br>
<br>


<form action="login" method = 'post'>
    @csrf
    <div>
        <span>*Name</span>
        <br>
        <input type="text" name="name" placeholder="enter ur name" value="{{ old('name') }}" >

        <br>
        <span style = "color:red">@error('name'){{$message}}@enderror</span>
        <br>
        <br>
    </div>
    <div>
    <span>*Email</span>
    <br>
        <input type="text" name = 'email' placeholder = 'enter ur email' value = "{{old('email')}}" >
        <br>
        <span style = "color:red">@error('email'){{$message}}@enderror</span>
        <br>
        <br>
    </div>
    <div>
    <span>*Password</span>
    <br>
        <input type="password" name = 'password' placeholder = 'enter ur password' value = "{{old('password')}}">
        <br>
        <span style = "color:red">@error('password'){{$message}}@enderror</span>
        <br>
        <br>
    </div>
    <div>
    <span>*Skills</span>
    <br>
        <input type="checkbox" name = 'skills[]' value = 'php' id='php' >
        <label for="php">php</label>
        <input type="checkbox" name = 'skills[]' value = 'java' id='java'>
        <label for="java">java</label>
        <input type="checkbox" name = 'skills[]' value = 'c++' id='c++'>
        <label for="c++">c++</label>
        <br>
        <span style = "color:red">@error('skills[]'){{$message}}@enderror</span>
        <br>
        <br>
        
    </div>
    <div>
    <span>*Gender</span>
    <br>
        <input type="radio" name = 'gender' value='male' id= 'male'>
        <label for="male">male</label>
        <input type="radio" name = 'gender' value='female' id= 'female'>
        <label for="female">female</label>
        <br>
        <span style = "color:red">@error('gender'){{$message}}@enderror</span>
        <br>
        <br>
    </div>
    <div>
    <span>*city</span>
    <br>
        <select name="city" id="">
            <option value="none">select</option>
            <option value="bangaluru">bengaluru</option>
            <option value="hassan">hassan</option>
            <option value="mumbai">mumbai</option>
            <br>
            <span style = "color:red">@error('city'){{$message}}@enderror</span>
        <br>
        <br>

        </select>
    </div>
    <div>
    <br>
    
    <span>*age</span>
    <br>
        <input type="range" min = 18 max = 100 name = 'age'>
        <br>
        <span style = "color:red">@error('age'){{$message}}@enderror</span>
        <br>
        <br>
    </div>
    <div>
        <button type = 'submit' >submit</button>
        <br>
        <br>
    </div>

</form> -->


<!-- URL MANIPULATION -->

<!-- <a href="/home">home1 page</a>
<br>
<a href="{{URL::to('home')}}">home2 page</a>
<br>
<h3>{{URL::current()}}</h3>
<h3>{{URL::full()}}</h3>
<h3>{{URL::previous()}}</h3> -->

<!-- NAMED URL  -->

<!-- WATCH IN WELCOMENOT -->



<!-- GROUPED URL  -->
 
 <!-- USING PREFIX -->

 <!-- SEE IN WEB.PHP AND USERCONTROLLER.PHP  -->



 <!-- USING CONTROLLER -->
  <!-- SEE IN WEB.PHP AND USERCONTROLLER.PHP  -->


 <!-- USING MIDDLEWARE -->

 <!-- IT IS SED CHECK FOR CONDTIONS 

 CREATE MIDDLEWARE USING CMD AND THEN ADD IMPORT THIS MIDDLEWARE TO APP.PHP PRESENT IN BOOTSTRAP
 (FOR MORE UNDERSTANDING WATCH OUT THERE FILES)

 THEN DO CHECKING IN MIDDLEWARE FILE -->




<!-- <h1>welcome,{{$name}}</h1> -->

<!-- NAMED ROUTING  -->



<!-- <a href="{{route('hm')}}">go to home1</a>
<br>
<a href="{{route('hmw')}}">go to home2</a>
<br>

<a href="{{route('user')}}">go to home1</a>
<br> -->

--}}



<h1>user list</h1>
{{-- print_r($users) --}}


 {{--<table border = '1'>

<tr>
    <th>Name</th>
    <th>Marks</th>
    <th>Rank</th>

</tr>
@foreach($users as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->marks}}</td>
    <td>{{$user->rank}}</td>
</tr>
@endforeach
</table> --}}

<!-- get from api  -->

{{--{{ print_r($data) }} --}}

<!-- GET FROM DATA BASE OF SPECIFIED DATA - QUERRY BIULDING  -->


{{--{{print_r($users) }} --}}


<!-- get data from using model querry  -->
 
{{--{{print_r($users) }} --}}


<!-- INSERT DATA TO DB USING FORM AND MODEL METHOD  -->


 {{--   <form action="" method="post" >
    @csrf
    <br>
    <br>
    <input type="number" placeholder="enter id" name = 'id'>
    <br>
    <br>
    <input type="text" placeholder="enter name" name = 'name'>
    <br>
    <br>
    <input type="text" placeholder="enter city" name = 'city'>
    <br>
    <br>
    <input type="number" placeholder="enter marks" name = 'marks'>
    <br>
    <br>
    <input type="number" placeholder="enter rank" name = 'rank'>
    <br>
    <br>


    <button >ADD</button>
    </form> --}}

<!-- get data from data base and print it -->

    {{--<table border = '1'>

<tr>
    <th>Name</th>
    <th>Marks</th>
    <th>Rank</th>

</tr>
@foreach($users as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->marks}}</td>
    <td>{{$user->rank}}</td>
</tr>
@endforeach
</table> --}}


<!-- delete data  -->

{{--<table border = '1'>

<tr>
    <th>Name</th>
    <th>Marks</th>
    <th>Rank</th>

</tr>
@foreach($students as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->marks}}</td>
    <td>{{$user->rank}}</td>
    <td> <a href="{{'delete/'.$user->id}}">Del</a></td>
</tr>
@endforeach
</table> --}}


<!-- update-data  -->

{{--<table border = '1'>

<tr>
    <th>Name</th>
    <th>Marks</th>
    <th>Rank</th>

</tr>
@foreach($students as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->marks}}</td>
    <td>{{$user->rank}}</td>
    <td> <a href="{{'delete/'.$user->id}}">Delete</a></td>
    <td> <a href="{{'edit/'.$user->id}}">Edit</a></td>
</tr>
@endforeach
</table>--}}


<!-- search bar  -->

{{--<form action="search" method="get">

<input type="text" name="search" placeholder="search with name" value = "{{@$search}}">
<button>search</button>
</form>
 

<table border = '1'>

<tr>
    <th>Name</th>
    <th>Marks</th>
    <th>Rank</th>

</tr>
@foreach($students as $user)
<tr>
<input type="checkbox" name = "id" value ='{{$user->id}}' >
    <td>{{$user->name}}</td>
    <td>{{$user->marks}}</td>
    <td>{{$user->rank}}</td>
    <td> <a href="{{'delete/'.$user->id}}">Delete</a></td>
    <td> <a href="{{'edit/'.$user->id}}">Edit</a></td>
</tr>
@endforeach
</table>

<!-- PAGINATION FOR TABLE WITH STYLE -->

{{ $students->links() }}


<style>
    .w-5.h-5
{
    width:20px
}

</style>--}}


<!-- MULTIPLE - DELETE - OPTION USING CHECK BOX  -->


{{--<form action="search" method="get">

<input type="text" name="search" placeholder="search with name" value = "{{@$search}}">
<button>search</button>
</form>
 
<form action="delete-list" method='post'>
    @csrf 
    <button>delete</button>
<table border = '1'>

<tr>
    <th>Name</th>
    <th>Marks</th>
    <th>Rank</th>

</tr>
@foreach($students as $user)
<tr>
<td><input type="checkbox" name = "ids[]" value ='{{$user->id}}' ></td>
    <td>{{$user->name}}</td>
    <td>{{$user->marks}}</td>
    <td>{{$user->rank}}</td>
    <td> <a href="{{'delete/'.$user->id}}">Delete</a></td>
    <td> <a href="{{'edit/'.$user->id}}">Edit</a></td>
</tr>
@endforeach
</table>
</form>


<!-- PAGINATION FOR TABLE WITH STYLE -->

{{ $students->links() }}


<style>
    .w-5.h-5
{
    width:20px
}

</style>--}}



<!-- UPLOAD FILE TO DATA BASE  -->


{{--<form action="upload" method = "post" enctype = "multipart/form-data" >
    @csrf
    <input type="file" name="file" >
    <button>upload</button>
</form>

<!-- display image on screen by getting its adress from database  -->

<div>
    <h1>list of images</h1>
@if($images)
@foreach($images as $img)
<img style="width:200px;height:100px;margin:10px" src="{{url('storage/'.$img->path)}}" alt="this is data base image">
@endforeach
@endif
</div>--}}


{{--X-TEMPLATES IN LARAVEL 

USED TO USE COMPONENT IN DIFFRENT FILE INSTEAD OF WRITTING SAME CODE AGAIN AND AGAIN 

NOTE : WE CAN USE CODE PRESENT IN OTHER COMPONENT IN PRESENT COMPONENT 

WE CREATED NAV BAR COMPONENT , WHICH NAME IS NAVBAR.PHP 
THIS COMPONENT CAN BE USED IN ALL OTHER COMPOENENT BY TAG  - <x-NAVBAR></x-NAVBAR> 
 THEN THIS CAN BE MADE DYNAMIC USING TAG <X-SLOT name = 'title'>write your code here , which ever u want </X-SLOT>
 then use that in navbar component as <div>{{$title}}</div>

 this are the steps need to be done to use other component dynamically --}}


 {{--LAYOUT INHERITANCE

 this is done in the files which inherits the layout files to it and sends codes to 

 STEP1:

@extends('path of the file where core code is present like navbar's path')
 
 
 STEP2:

@section('main')

WRITE YOUR CODE HERE  
- which enables dynamic layout

@endsection

step3:
 Go to layout file - where core code is present

 add - 

 @section('main')
 @show


 STUBS

 stubs means the process of adding or deleting by default code we get during when we create like php artisan make:component update like this 

 firstly we should publish stub - php artisan stubs:publish 
 secondly find the stubs which u wish to change 
 thirdly change how u required 
 then create which file u wish , you will get the code as per changes done in stubs of respective stub--}}


 {{--ROUTING 

 NOTES:
 -to route put , patch , delete, ect.. 
   use <input type="hidden" name = "_method" value = "put or patch or delete etc..">
 -to route post , get it normal 
 -to route the same function for all time of routing use any instead of get, put, post etc.. 
   Route::any();
 -to route the get , post on single function use match function 
   Route::match([get,post],'routing_url',[controller:class,'function_name'])


SESSION - 

-it is storage given by device to store data which is used again and again ,
not any relation with data base--}}




{{--<form action="session_put" method="post" >
    @csrf
    <br>
    <br>
    <input type="number" placeholder="enter id" name = 'id'>
    <br>
    <br>
    <input type="text" placeholder="enter name" name = 'name'>
    <br>
    <br>
    <input type="text" placeholder="enter city" name = 'city'>
    <br>
    <br>
    <input type="number" placeholder="enter marks" name = 'marks'>
    <br>
    <br>
    <input type="number" placeholder="enter rank" name = 'rank'>
    <br>
    <br>


    <button >ADD</button>
    <button><a href="logout">logout</a></button>
    
    </form> 


    <div>
        <h1>display session data</h1>
        <!-- showing session flash massege on u=adding of user  -->
        <h1>{{session('msg')}}</h1>

        @if(session('data'))
        <h1>welcome,{{session('data')['name']}}</h1>
        <h1>welcome,{{session('data')['id']}}</h1>
        <h1>welcome,{{session('data')['city']}}</h1>
        {{print_r(session('data'))}}
        @endif
        
    
    </div>--}}



{{--LOCALIZATION - 

    THIS IS USED TO DISPLAY CONTENT IN VARIETY OF LANGUAGES --}}


   {{--  step1:
    publish lang 
    go to lang folder 
    create welcome .php file then add key and value to be used 
    in that way create similar way for all languages which ever u want 
    only value should get chnaged not key 
    go to env file and then chnage languegea from en to folder which u created for diffrent folder 


    <h1>{{__('welcome.sen1') }}</h1>
    <h2>{{__('welcome.sen2') }}</h2>
    <h3>{{__('welcome.sen3') }}</h3>

    <button><a href='{{ url("change/kan") }}'>kan</a></button>
    <button><a href='{{ url("change/en") }}'>eng</a></button>
    <button><a href='{{ url("change/hindi") }}'>hindi</a></button>


    MIGRATION - THE PROCESS OF CREATEING TABLE AND SCHEMA , MERGING TWO TABLE AND ADDING DATA TO TABLE 
    IS DONE THROUGH LARAVEL SOME TIME BECAUSE WE DONT HAVE DIRECT CONNECTION WITH DATA ABSE
    THIS PROCESS IS CALLLED AS MIGRATION   For more info see the migration file 


    
    SEEDING - THE PROCESS OF INSERTING THE DATA TO DATA BASE WHICH CAN GET BY THE ALL THE DEVELOPERS 
    THIS PREVENT OF INSERTING THE DATA BY ALL THE DEVELOPERS INDIVIDUALLY 
    IF THE DATA GET SEEDED BY ONE DEVELOPER OTHER DEVELOPER ALSO CAN GET THAT DATA
    
    USE PHP ARTISAN MAKE:SEEDER SEEDER_NAME
    THEN ADD THE DATA WHICH NEED TO BE ADDED THEN 
    USE PHP ARTISAN DB:SEED --CLASS=SEEDER_NAME

    FOR MORE INFO WATCH SEEDER FILE
    
    
    
    MAINTANANCE MODE CMD :
    PHP ARTISAN DOWN - TO SHOW SERVER DOWN 
    PHP ARTISAN UP - TO MAKE SERVICE AVAILABLE TO USERS

    TO GIVE SECRETE KEY BY WHICH THE DEVELOPER CAN USE THE WEBSITE IS 
    PHP ARTISAN DOWN --SECRET='ONLYFORDEV'
    SEARCH AS LOCALHOST:8000/ONLYFORDEV


    ACCESSORS -  THE PROCESS OF MEDIFING THE DATA WHICH IS GETTING FROM DATA BASE 
    FOR MORE INFO SEE MODELS.STUDENT.PHP 

    MUTATORS -  THE PROCESS OF MODIFING THE DATA BEFORE WE STORE DATA INTO DATA BASE 
    FOR MORE INFO SEE MODELS.STUDENT.PHP 

    --}} 

   {{--//ACCESSORS TO DATA OF STUDENTS - MAKING ROUTE

    //MUTATORS TO DATA BEFORE WE ADD TO DATA BASE

    //ONE - ONE RELATION BETWEEN TABLE  GETTING THE DATA OF OTHER TABLE WHICH IS IN RELATION WITH OTHER

    //ONE - ONE RELATION BETWEEN TABLE  GETTING THE DATA OF OTHER TABLE WHICH IS IN RELATION WITH OTHER

    //Many - ONE RELATION BETWEEN TABLE  GETTING THE DATA OF OTHER TABLE WHICH IS IN RELATION WITH OTHER
--}}

    

API IN LARAVEL - 
IN LARAVEL WE CAN ABLE TO CONNECT TO DATA BASE THROUGH MODEL , 
SO API REQUIREMENT IS LESS TO KEEP THE API ROOUTING AND WEB ROUTING APART WE USE API ROUTING FILE 
THERE IS NO MUCH DIFFERENCE INSTEAD OF ROUTING IN WEB.PHP WE USE API.PHP FOR ROUTING


    





