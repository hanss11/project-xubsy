@extends('layouts.header')

@section('contenido')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">{{ Auth::user()->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- news -->

    <div class="card-section">
        <div class="container">
            <div class="card-block bg-white mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
            <div class="card kl-card kl-xl kl-shine kl-show">
                <div class="kl-card-block kl-xl bg-primary kl-shadow-b kl-overlay kl-slide-in kl-show">
                    <div class="kl-background">
                        <img src="images/{{ Auth::user()->avatar}}">
                    </div>

                    <div class="kl-card-overlay kl-card-overlay-split-q kl-dark kl-inverse">
                        <div class="kl-card-overlay-item">

                        </div>
                        <div class="kl-card-overlay-item"></div>
                        <div class="kl-card-overlay-item">
                            <div class="kl-figure-block">
                                <span class="kl-figure kl-txt-shadow">26k</span>
                                <span class="kl-title">Seguidores</span>
                            </div>
                        </div>
                        <div class="kl-card-overlay-item">
                            <div class="kl-figure-block">
                                <span class="kl-figure">109</span>
                                <span class="kl-title">Siguiendo</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
              <h1 class="text-center">Pensando en cerveza?</h1>
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
                        <option selected> Cerveceria  </option>
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

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Comentarios</label>
                  <textarea class="form-control" name="mensajeposteado" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <label> <p>Fotos del post</p> <input id="regAvatar" type="file" name="fotopost" value=""></label>
                <div class="row justify-content-center">
                  <button type="submit" class="btn btn-primary mb-2">SUBE TU POSTEO!</button>
                </div>
              </div>
              </form>
            </div>
            </div>
            </div>
            <div class="col-md-12">

          @foreach ($posteos as $row)
            @if ($row->nickname == Auth::user()->name)
          <div class="card w-100 mt-5" style="width: 18rem; box-shadow: 1px 1px 10px 1px rgba(138,138,138,1);">
                <div class="card-body ">
              @if($row->fotopost)
                <img class="card-img-top" src="images/{{$row->fotopost}}" alt="Card image cap">
              @endif
                <h5 class="card-title">{{$row->titulopost}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$row->nickname}}</h6>
                <p class="card-text">{{$row->mensajeposteado}}</p>
                <a href="#" class="card-link">Like</a>
                <a href="#" class="card-link">Compartir</a>
                <p class="card-text"><small class="text-muted">{{$row->created_at}}</small></p>

              </div>
          </div>
            @endif
          @endforeach
