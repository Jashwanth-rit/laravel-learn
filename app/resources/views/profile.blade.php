<h1>profile page</h1>


<!-- VARIABLE USAGE,IF,ELSE IF, FOR, FOREACH -->

<!-- NOTE: JUST USE @ INFRONT OF ALL THE KEY WORD AND DO USE PHP TYPE OF CODE -->
<!-- NOTE: DONT USE FLOWER BRASEC , USE END KEYWORD -->
 <!-- USE HTML TAGS TO PRINT NOT ECHO -->
  
<h1>{{$name}}</h1>

@if($name == 'jk')
    <h1>{{$name}}</h1>

@elseif($name == 'pk')
    <h1>{{$name}}</h1>

@else
    <h1>no name found</h1>

@endif

@for($i = 0 ; $i<=3;$i++)
     <h1>{{$i}}</h1>
@endfor

@foreach($users as $user)
<h1>{{$user}}</h1>
@endforeach
