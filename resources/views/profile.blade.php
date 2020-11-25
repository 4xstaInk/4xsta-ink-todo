<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>

        <style>
            body {
                widows: 100vw;
    height: 100vh;
    background: rgb(74,175,244);
    background: radial-gradient(circle, rgba(74,175,244,1) 32%, rgba(74,78,244,1) 100%);
            }
          
            #tok{
                display: none;
            }
            #ownerid{
                display: none;
            }
            #heading{
                font-size:500%;
            }
            input {
                font-size:20px;
                color: black;
  width: 50%;
  padding: 12px 20px;
  margin: 0px 0;
  box-sizing: border-box;
  border: 3px solid white;
  border-radius: 4px;
  background-color: white;
}
p{
    color:white;
    font-size: 150%;
}
#button-addon2{
  background-color: #4CAF50;
  border:3px solid white;
  border-radius: 4px;
  color: white;
  padding: 14px 30px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-size:100%;
}
#delete{
    background-color:red; /* Green */
  border:2px solid  white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;

}   
#edit{
    background-color:grey; /* Green */
  border:2px solid  white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
#notdone{
    background-color: yellow; /* Green */
  border: 2px solid  white;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
#clickifdone{
    background-color: #4CAF50; /* Green */
  border: 2px solid  white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
#mark{
    font-size:100%;
}
#dot{
    font-size: 100%;
}
#todotext{
  font-size: 100%;
}
#table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border-collapse: collapse;
  border: 1px solid white;
  padding: 8px;
}


#table tr:hover {background-color:#8080ff;}

#table tr {
  text-align: left;
  color: white;
  font-size:100%;
  
}
    </style>
    </head>
    <body class="antialiased">
<center>
<a href="{{URL::to('/')}}" style="text-decoration: none;color:black;">
<h1 id="heading">4xsta ToDo App</h1>
</a>

<hr>


<div>
<form action="{{route('todo.store')}}" method="POST">
@csrf
<input type="text" name="title" placeholder="Type here...">
<input type="text" id="ownerid" name="ownerid" value="0">
<button type="submit" id="button-addon2">Add to the list</button> 
<p>My Todo List</p>
</center>
</form>
</div>


<center>
<table style="width:50%" id="table"> 
@forelse ($todos as $todo)
<tr>
<td>
@if($todo->completed == 0)
<span id="dot">Not Done</span>
@else
<span id="mark">Completed</span>
@endif
</td>
<td>
<span id="todotext">{{$todo->title}}</span>
</td>
<td>

@if($todo->completed == 0)

<form action="{{route('todo.update', $todo->id)}}" method="POST">
@method("PUT")
@csrf
<input type="text" name="completed" value="1" hidden/>
<button id="clickifdone">Click if Done</button>
</form>
@else

<form action="{{route('todo.update', $todo->id)}}" method="POST">
@method("PUT")
@csrf
<input type="text" name="completed" value="0" hidden/>
<button id="notdone">Not Done</button>
</form>
@endif

<a href="{{route('todo.edit', $todo->id)}}" id="edit">Edit</a>

<form action="{{route('todo.destroy', $todo->id)}}" method="POST">
@csrf
@method('DELETE')
<button id="delete">Delete</button>
</form>
</td>
</tr>

@empty
<tr><td style="color:white; text-align:center;">Nothing added to your TODO list</td></tr>
@endforelse
</table>
</center>
<div style="height:500px;">

</div>
           </body>
          
</html>
