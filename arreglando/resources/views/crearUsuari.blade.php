@extends('templates.plantilla')

@section('titulo', 'Broggi - Crear usuari')

@section('content')

<link href="{{ asset('/css/backButton.css') }}" rel="stylesheet">
  <div id="mySidenav2" class="sidenav2">
    <a href="{{ asset('/')}}" id="back">
        Torna a l'inici
        <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        </svg>
    </a>
  </div>
    <div class="container border col-sm-7 mt-5 border rounded shadow-lg">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-black text-center mt-5">Crear nou usuari/a: </h3>
                <form method="POST" action="{{ route('register') }}" class="mt-5">
                  @csrf
                  
                      {{-- estaría bien controlar el tamaño para que fuese un mínimo --}}
                    <div class="form-group row">
                        <label for="inputCodi" class="col-sm-2 offset-sm-2 col-form-label">Codi: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputCodi" name="inputCodi">
                        </div>                       
                    </div>

                    <div class="form-group row">
                        <label for="inputUsuari" class="col-sm-2 offset-sm-2 col-form-label">Usuari/a: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputUsuari" name="inputUsuari">
                        </div>                       
                    </div>

                    <div class="form-group row">
                        <label for="inputContrasenya" class="col-sm-2 offset-sm-2 col-form-label">Contrasenya: </label>
                        <div class="col-sm-6 input-group">
                            <input type="password" class="form-control" id="inputContrasenya" name="inputContrasenya">
                              <div class="input-group-append">
                               <div class="input-group-text" onclick="mContrasenya()"><i class="fa fa-eye"></i></div>
                            </div>
                        </div>                      
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-2 offset-sm-2 pt-0">Tipus d'usuari:</legend>

                          <div class="col-sm-6">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="rol" id="rol" value="2" checked>
                              <label class="form-check-label" for="rol">
                                CECOS
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="rol" id="rol" value="3">
                              <label class="form-check-label" for="rol">
                                Recurs mòbil
                              </label>
                            </div>

                            <!-- <div class="form-check">
                              <input class="form-check-input" type="radio" name="rol" id="rol" value="1">
                              <label class="form-check-label" for="rol">
                                Admin
                              </label>
                            </div> -->

                          </div>
                        </div>

                    </fieldset>

                    
                    <div class="form-group row">
                        <div class="col-8 my-4 offset-2">
                          <button type="submit" class="btn btn-block btn-custom1">Confirmar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <hr>
        {{-- usuari correcte --}}
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          <strong>Usuari Creat Correctament!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{-- usuari errror --}}
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
          <strong>Oops, sembla que hi ha hagut un error!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    </div>

    <script>
      function mContrasenya() {
      var x = document.getElementById("inputContrasenya");
      if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
}
    </script>

@endsection