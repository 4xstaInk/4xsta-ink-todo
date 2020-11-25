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
            #heading{
                font-size:500%;
            }
            a{
                color:white;
            }
            #tok{
                display: none;
            }
            input {
                font-size:20px;
                color: white;
  width: 50%;
  padding: 12px 20px;
  margin: 0px 0;
  box-sizing: border-box;
  border: 3px solid white;
  border-radius: 4px;
  background-color: transparent;
}
p{
    color:white;
    font-size: 150%;
}
#button{
  background-color: #4CAF50;
  border:3px solid white;
  border-radius: 4px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-size:200%;
}
          
        </style>
    </head>
    <body class="antialiased">
<center>
<h1 id="heading">4xsta ToDo App</h1>
<hr>
<h2>REGISTER</h2>
</center>
<center>
<div>
<form action="{{URL::to('/store')}}" method="POST">
<p>Enter Fullname</p>
<input type="text" name="name" placeholder="Enter name" value="" />
<br><br>
<p>Enter Email Adress</p>
<input type="email" name="email" placeholder="Enter Email" value="" />
<br><br>
<p>Enter Password</p>
<input type="password" name="password" placeholder="Enter Password" value="" />
<br><br>
<input type="text" id="tok" name="_token" value="{{csrf_token()}}" />
<br><br>
<button type="submit" id="button" name="button">Register</button>
</form>
</div>
</center>
           </body>
</html>
