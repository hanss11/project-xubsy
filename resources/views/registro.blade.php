@extends('layouts.app')

@section('content')
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <link rel="stylesheet" href="./css/styles.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registro Beers</title>
    </head>
    <body>
      <div class="contain">
          <div class="register">
              <a href="index.php"> <img src="./images/logo.png" alt=""></a>
              <p>¡Unite a la comunidad!</p>
              <form class="form" action="registro2.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name" autofocus placeholder="Usuario" value=""> <span class="errorstyle"> </span>
                <input type="email" name="email"  placeholder="Email" value=""> <span class="errorstyle"> </span>
                <input type="password" name="pass"  placeholder="Contraseña" value=""> <span class="errorstyle"></span>
                <label> <p>Foto de perfil</p> <input id="regAvatar" type="file" name="avatar" value=""></label>

                <input id="registro" type="submit" name="" value="REGISTRATE">
                <a href="Login.php"> <p>Ya tenes cuenta?</p></a>
            </form>
          </div>
      </div>
    </body>
  </html>
@endsection
