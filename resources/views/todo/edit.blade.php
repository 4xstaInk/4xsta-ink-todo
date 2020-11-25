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
            a{
                color:white;
            }
            #tok{
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
#text{
    color: white;
}     
#textedit{
    color: #f2f2f2;
    font-size:120%;
}
        </style>
    </head>
    <body class="antialiased">
<center>

<h1 id="heading">4xsta ToDo App</h1>
<hr>
<h2></h2>
</center>

<center>

<div>
<p id="text">Edit your Todo called:</p>
<p id="textedit">"{{$todo->title}}"</p>
<form action="{{route('todo.update', $todo->id)}}" method="POST">
@csrf
@method('PUT')

<input type="text" name="title" value='{{$todo->title}}' />
<button type="submit" id="button-addon2">Save Edit</button> 
</form>
</div>


</center>
           </body>
          
</html>
