@extends('layouts.app')

@section('content')
  <!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Beers Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/styles2.css">
  </head>
  <body>
    <form class="" action="#" method="post">
      {{ csrf_field() }}
<div>


    <div class="login-form">
       <a id="titulo" href="index.php"><h1>Beers</h1></a>
        <span class="errorstyle"> </span>
       <div class="form-group">

         <input type="text" name="email" class="form-control" placeholder="email " id="UserName">
         <i class="fa fa-user"></i>
       </div>
        <span class="errorstyle"></span>
       <div class="form-group log-status">
         <input type="password" name="password" class="form-control" placeholder="Contraseña" id="password" value="">
         <i class="fa fa-lock"></i>
       </div>
        <label class="conect" ><input  type="checkbox" name="Conectado" value="conectado"> <p>Mantener Conectado</p></label>
        <a class="link" href="#">Olvidaste Tu contraseña?</a>
       <button type="submit" class="log-btn" >Entrar</button>


     </div>

    </div>
   </form>
  </body>

  </html>
@endsection
