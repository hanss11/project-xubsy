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

      @if(count($errors)>0)
        @foreach ($errors->all() as $key => $value)
            <div class="">
              {{ $value }}
            </div>
        @endforeach
      @endif
      <div class="contain">
          <div class="register">
              <a href="index.php"> <img src="./images/logo.png" alt=""></a>
              <p>¡Unite a la comunidad!</p>
              <form class="form"  action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="text" name="name" autofocus placeholder="Usuario"> <span class="errorstyle"></span>
                <input type="email" name="email"  placeholder="Email"> <span class="errorstyle"></span>
                <input type="password" name="password"  placeholder="Contraseña"> <span class="errorstyle"></span>
                <label> <p>Foto de perfil</p> <input id="regAvatar" type="file" name="avatar" value=""></label>

                <input id="registro" type="submit" name="" value="REGISTRATE">
                <a href="login.blade.php"> <p>Ya tenes cuenta?</p></a>
            </form>
          </div>
      </div>
    </body>
  </html>

@endsection
