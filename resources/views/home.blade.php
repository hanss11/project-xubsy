@extends('layouts.header')

@section('contenido')
<div class="container-fluid" style="margin-top:15vh;">
  <div class="col-md-3">
    <div class="card w-100" style="width: 18rem;" id="bordercontprof">
      <img class="card-img-top" src="images/{{ Auth::user()->avatar}}" alt="Card image cap" style="width: 100%; height: 35vh;object-fit: cover;">
      <div class="card-body" id="contperf">
        <h5 class="card-title" id="biocolor">{{ Auth::user()->name }}</h5>
          <p class="card-text" id="biocolor" >Bio User</p>
          <a href="/profile" class="btn btn-primary">Mi Perfil</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <h1 class="text-center comentacom" >¡Comenta a la comunidad!</h1>
    <form class="form" action="/posteo" method="POST" enctype="multipart/form-data">
      {{csrf_field() }}
    <div class="col-md-12">
      <div class="form-row">
        <div class="form-group col-md-4">
          <input type="text" name="nickname" readonly class="form-control" id="inputnickname" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group col-md-4">
          {{-- <select type="text" name="local" class="form-control" id="inputlocal" placeholder="Cerveceria">
            <option value="Antares">Antares</option>
            <option value="Prinston">Prinston</option>
            <option value="Cervelar">Cervelar</option>
            <option value="Pentos">Pentos</option>
            <option value="BarbaRoja">BarbaRoja</option>
            <option value="LaChopperia">LaChopperia</option>
          </select> --}}

            <select  name="local" class="custom-select" id="inputlocal" style="height:3.4rem;">
              <option selected disabled> Cerveceria  </option>
              <option value="Antares">Antares</option>
              <option value="Prinston">Prinston</option>
              <option value="Cervelar">Cervelar</option>
              <option value="Pentos">Pentos</option>
              <option value="BarbaRoja">BarbaRoja</option>
              <option value="LaChopperia">LaChopperia</option>
            </select>

          {{-- <input type="text" name="local" class="form-control" id="inputlocal" placeholder="Cerveceria"> --}}
        </div>
        <div class="form-group col-md-4">
          <input type="text" name="titulopost" class="form-control" id="inputitulo" placeholder="Titulo">
        </div>
      </div>

      <div class="form-group" id="countandcoment">
        <label for="exampleFormControlTextarea1">Comentarios</label>
        <textarea class="form-control" name="mensajeposteado" maxlength="190" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div id="the-count">
          <span id="current">0</span>
          <span id="maximum">/ 190</span>
        </div>
      </div>

      <label  for="fileInput">
        <i class="far fa-images icon postimage"></i></label>
        <input id="fileInput" name="fotopost" value="" type="file">

      <div class="row justify-content-center">
        <button href="/profile" type="submit" class="btn btn-primary mb-2">SUBE TU POSTEO!</button>
      </div>
    </div>

    </form>

        <div class="col-md-12">

      @foreach ($posteos as $row)
      <div class="card w-100 mt-5" style="width: 18rem; box-shadow: 1px 1px 10px 1px rgba(138,138,138,1);">
            <div class="card-body ">
          @if($row->fotopost)
            <img class="card-img-top" style="max-height: 500px" src="images/{{$row->fotopost}}" alt="Card image cap" style="height: 15vh;object-fit: cover;">
          @endif
            <h5 class="card-title">{{$row->titulopost}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$row->nickname}}</h6>
            <p class="card-text">{{$row->mensajeposteado}}</p>
            <a href="#" class="card-link">Like</a>
            <a href="#" class="card-link">Compartir</a>
            <p class="card-text"><small class="text-muted">{{$row->created_at}}</small></p>

          </div>
      </div>

      @endforeach
        </div>



  </div>
  <div class="col-md-3">
    <div class="card w-100" style="width: 18rem;">
      <div class="card-body" id="contderecha">
        <h5 class="card-title" id="newfriends">Hace nuevos amigos</h5>
        <h6 class="card-subtitle mb-2 text-muted">5 Personas Random</h6>
        <p class="card-text">
          <ul class="list-group list-group-flush">
            @foreach($usuario as $us)
              @if($us->avatar)
                <a href="/profile/{{$us->id}}" class="list-group-item list-group-item-action"><img src="../images/{{$us->avatar}}" alt="..." class="rounded-circle" style="width: 30px; height:30px;"> <span>{{$us->name}}</span></a>
              @else
              <a href="/profile/{{$us->id}}" class="list-group-item list-group-item-action"><img src="../images/default-avatar.png" alt="..." class="rounded-circle" style="width: 30px; height:30px;"> <span>{{$us->name}}</span></a>
              @endif
            @endforeach
          </ul>
        </p>
        <a href="/peoples" class="card-link">Buscar Amigo</a>

      </div>
    </div>
  </div>
</div>
<footer>
    <div class="sub-footer mt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12" id="footercopyright">
            <p class="text-center text-light">copyright Beers</p>
        </div>
      </div>
    </div>
  </footer>
  @stop
