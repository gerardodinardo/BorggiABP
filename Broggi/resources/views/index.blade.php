@extends('templates.plantilla')

@section('titulo', 'Broggi - Login')

@section('content')
  <div class="container border border rounded-left mt-5 shadow-lg mb-5 bg-white rounded">
    <div class="row">
      <div class="col-sm-5">
        <h3 class="text-center text-dark mt-5">Accedeix-hi</h2>


          <form action="{{ action('Auth\LoginController@login')}}" method="POST">
            @csrf
            
          {{-- USUARIO --}}
            <div class="form-group">
              <label for="usuari">Usuari/a: </label>
                  <input type="text" name="usuari" id="usuari" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('user')}}">
                <small id="emailHelp" class="form-text text-muted">Si no tens un usuari, posa't en contacte amb nosaltres.</small>
            </div>

            {{-- CONTRASENYA --}}
            {{-- "pass" significa contraseña, es el identificador que tiene para no tener que escribir tanto lol --}}
            <div class="form-group">
                <label for="pass">Contrasenya: </label>
                  <input type="password" name="pass" id="pass" class="form-control" id="exampleInputPassword1">
            </div>

            {{-- Esto lo tendría que mirar como se hace pero ni idea de momento de como va el tema, yo lo quitaría si no encuentro forma de controlarlo. --}}
            <div class="form-group form-check ml-4">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Recorda'm</label>
            </div>
            <div class="text-center pb-4 mt-5">

              {{-- MOTHERFUCKING SUBMIT BUTTON --}}
              <button type="submit" class="btn btn-block btn-custom1">Ingressar</button>


            </div>            
          </form>


      </div>
      <div class="col-sm-7">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/instalaciones.jpg') }}" class="d-block w-100" alt="..." height="500px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Instalacions</h5>
                <p>Tenim les millors instal·lacions perquè et puguis formar de la millor manera possible.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/portesObertes.png') }}" class="d-block w-100" alt="..." height="500px">
              <div class="carousel-caption d-none d-md-block">
                <!--<h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
              </div>
            </div>
            <div class="carousel-item">
              <!--<img src="{{ asset('img/ubicacion.png') }}" class="d-block w-100" alt="..." height="500px">-->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.178086687839!2d2.1760203154266007!3d41.41365267926181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2d121a09aa9%3A0x295f7b407ebc6292!2sInstituto%20P%C3%BAblico%20Mois%C3%A9s%20Broggi!5e0!3m2!1ses!2ses!4v1583389633190!5m2!1ses!2ses" class="d-block w-100" height="500" frameborder="0" allowfullscreen=""></iframe>
              <div class="carousel-caption d-none d-md-block">
                <!--<h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>-->
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
    
