<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beers</title>

  <!-- Bootstrap -->
  <link href="../css/stylenewprof.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/animate.css">
  <link href="../css/stylehome.css" rel="stylesheet">
  {{-- <link href="../css/stylehomecervecero.css" rel="stylesheet"> --}}
  <link type="text/css" rel="stylesheet" media="all" href="../css/stylehome.css" id="theme_css" />
  <!-- <link type="text/css" rel="stylesheet" media="all" href="../css/stylehomecervecero.css" id="theme_css2" /> *falta pulirlo* -->



</head>

<body>

  <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light" id="nav">
    <a class="navbar-brand beerstittle" href="/home" id="beersnav">Beers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <div class="navbar-nav ">
          <li class="dropdown">
              <a href="# " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                 <img src="../images/{{ Auth::user()->avatar}}" alt="profile" class="rounded-circle" style="width:35px; height:35px;">  {{-- {{ Auth::user()->name }} --}}
              </a>

              <ul class="dropdown-menu">
                <div class="dropdown-header">  <span class="navbar-text text-black m-auto pr-3 font-weight-bold">
                    {{ Auth::user()->name }}
                  </span></div>
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>

          <a class="nav-item nav-link" href="#" id="msg"><i class="fas fa-envelope"></i></a>
          <a class="nav-item nav-link" href="#" id="notif"><i class="fas fa-bell"></i></a>
          <a class="nav-item nav-link font-weight-bold" href="/home" id="homecolor">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link font-weight-bold" href="/peoples" id="momentscolor">Peoples</a>

        </div>

      </div>

      <button class="btn btn-outline-success mr-3 font-weight-bold" type="button" data-toggle="modal" data-target="#exampleModalCenter" id="npostcolor">New Post</button>

      <form class="form-inline navbar-right" action="/search" method="get">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search ">
        <button class="btn btn-outline-success my-2 my-sm-0 mr-3 font-weight-bold" type="submit" id="searchcolor">Search</button>
      </form>
        <button class="btn btn-outline-success mr-3" type="button" name="changecolor" id="buttonID"><img src="../images/pinta.png" style="height:20px" alt=""> </button>
        <!-- <button class="btn btn-outline-success mr-3" type="button" name="changecolor2" id="buttonID2"><img src="../images/cantimplora.png" style="height:20px" alt=""> </button> *falta pulirlo* -->


    </div>
    <div id="sfc4en1xmk5bygqf1lfkm68ktje8qwkxqzg"></div>
    {{-- <a title="contador de visitas com"><img src="https://counter4.whocame.ovh/private/contadorvisitasgratis.php?c=u46l7c5c3hhmb5m8tldmmxph81ryxbn8" border="0" title="contador de visitas com" alt="contador de visitas com"></a> --}}
  </nav>

@yield('contenido')
@show
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../js/jquery-2.1.1.min.js"></script>
  <script src="../js/counter.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/responsive-slider.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/changecolor.js"></script>
  <!-- <script src="../js/changecolor2.js"></script> *falta pulirlo* -->



  <script>
    wow = new WOW({}).init();
  </script>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle"><img src="../images/{{ Auth::user()->avatar}}" alt="profile" class="rounded-circle" style="width:35px; height:35px;"></h5>
          <h5 class="ml-3">{{ Auth::user()->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Publicar</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
