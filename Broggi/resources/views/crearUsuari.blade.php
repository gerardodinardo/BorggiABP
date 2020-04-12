@extends('templates.plantilla')

@section('titulo', 'Broggi - Crear usuari')

@section('content')

    <div class="container border col-sm-7 mt-5 border rounded shadow-lg">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-black text-center mt-5">Crear nou usuari/a: </h3>
                <form class="mt-5">
                    <div class="form-group row">
                        <label for="inputCodi" class="col-sm-2 col-form-label">Codi: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCodi">
                        </div>                       
                    </div>
                    <div class="form-group row">
                        <label for="inputUsuari" class="col-sm-2 col-form-label">Usuari/a: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputUsuari">
                        </div>                       
                    </div>
                    <div class="form-group row">
                        <label for="inputContrasenya" class="col-sm-2 col-form-label">Contrasenya: </label>
                        <div class="col-sm-10 input-group">
                            <input type="password" class="form-control" id="inputContrasenya">
                            <div class="input-group-append">
                              <div class="input-group-text" onclick="mContrasenya()"><i class="fa fa-eye"></i></div>
                            </div>
                        </div>                      
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-2 pt-0">Tipus d'usuari:</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                              <label class="form-check-label" for="gridRadios1">
                                CECOS
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                              <label class="form-check-label" for="gridRadios2">
                                Recurs mòbil
                              </label>
                            </div>
                          </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-10 my-4 offset-1">
                          <button type="submit" class="btn btn-block btn-custom1">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
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