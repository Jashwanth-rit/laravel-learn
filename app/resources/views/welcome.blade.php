
<!-- //IMPORTING TWO OR MORE FILES USING INCLUDE -->
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

<!-- GROUPED URL  -->
 
 USING PREFIX
 USING CONTROLLER
 USING MIDDLEWARE