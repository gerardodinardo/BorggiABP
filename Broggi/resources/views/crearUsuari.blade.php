@extends('templates.plantilla')

@section('titulo', 'Broggi - Crear usuari')

@section('content')

    <div class="container border col-sm-5 mt-5 border rounded shadow-lg">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-danger text-center mt-4">Crear nou usuari: </h3>
                <form class="mt-5">
                    <div class="form-group row">
                        <label for="inputCodi" class="col-sm-2 col-form-label">Codi: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCodi">
                        </div>                       
                    </div>
                    <div class="form-group row">
                        <label for="inputUsuari" class="col-sm-2 col-form-label">Usuari: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputUsuari">
                        </div>                       
                    </div>
                    <div class="form-group row">
                        <label for="inputContrasenya" class="col-sm-2 col-form-label">Contrasenya: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputContrasenya">
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
                        <div class="col-12 offset-sm-8">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection