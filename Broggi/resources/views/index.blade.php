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
                  <input type="text" name="usuari" id="usuari" class="form-control"aria-describedby="emailHelp" value="{{old('user')}}">
                <small id="emailHelp" class="form-text text-muted">Si no tens un usuari, posa't en contacte amb nosaltres.</small>
            </div>

            {{-- CONTRASENYA --}}
            {{-- "pass" significa contraseña, es el identificador que tiene para no tener que escribir tanto lol --}}
            <div class="form-group">
                <label for="contrasenya">Contrasenya: </label>
                  <input type="password" name="contrasenya" id="contrasenya" class="form-control">
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
  <div id="mySidenav" class="sidenav">
    <a href="" id="simulacio">
      Simulació
      <svg class="bi bi-droplet-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"style="margin-left: 20px; position:fixed;margin-top: 5px;">
        <path fill-rule="evenodd" d="M8 16a6 6 0 006-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 006 6zM6.646 4.646c-.376.377-1.272 1.489-2.093 3.13l.894.448c.78-1.559 1.616-2.58 1.907-2.87l-.708-.708z" clip-rule="evenodd"/>
      </svg>
    </a>
    <a href="#" id="formacio">
      Formació
      <svg class="bi bi-question-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"style="margin-left: 20px;position:fixed;margin-top: 5px;">
        <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z" clip-rule="evenodd"/>
      </svg>
    </a>
   <a href="{{ asset('/contacte') }}" id="contacte">
     Contacte
      <svg class="bi bi-briefcase-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-left: 20px;position:fixed;margin-top: 5px;">
        <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5V6.85L8.129 8.947a.5.5 0 01-.258 0L0 6.85v5.65z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 011.5 3h13A1.5 1.5 0 0116 4.5v1.384l-7.614 2.03a1.5 1.5 0 01-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 016.5 1h3A1.5 1.5 0 0111 2.5V3h-1v-.5a.5.5 0 00-.5-.5h-3a.5.5 0 00-.5.5V3H5v-.5z" clip-rule="evenodd"/>
      </svg>
    </a>
  </div>

@endsection
    
