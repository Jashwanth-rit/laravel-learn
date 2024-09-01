<div>
    <!-- Well begun is half done. - Aristotle -->

    <form action="/update/{{$students->id}}" method="post" >
    @csrf
    <br>
    <br>
    <input type="hidden" placeholder="enter id" name = 'id' value = '{{$students->id}}'>
    <br>
    <br>
    <input type="text" placeholder="enter name" name = 'name' value = '{{$students->name}}'>
    <br>
    <br>
    <input type="text" placeholder="enter city" name = 'city' value = '{{$students->city}}'>
    <br>
    <br>
    <input type="number" placeholder="enter marks" name = 'marks' value = '{{$students->marks}}'>
    <br>
    <br>
    <input type="number" placeholder="enter rank" name = 'rank' value = '{{$students->rank}}'>
    <br>
    <br>


    <button >ADD</button>
    <a href="/">cancel</a>
    </form>
</div>
