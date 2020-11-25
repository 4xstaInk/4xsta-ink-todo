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
               
                font-size:300%;
                background-color:#9933ff;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
            }
            img{
                height: 50vh;
                width:50vw;
            }
            #heading{
                font-size:500%;
            }
            a:hover, a:active {
  background-color:#5c00b3;
}
        </style>
    </head>
    <body class="antialiased">
<center>
<h1 id="heading">4xsta ToDo App</h1>
<hr>
<a href="{{URL::to('/login')}}">Login</a> <a href="{{URL::to('/register')}}">Register</a>
</center>

           </body>
</html>
