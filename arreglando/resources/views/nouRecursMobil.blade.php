@extends('templates.plantilla'){{-- Pantalla de formulario para crear nueva incidencia con desplegables --}}

@section('titulo', 'Broggi - Afegir Incidència')


@section('content')


<!-- 
    id 	
    codi 	
    tipus_recurs_id 	
    id_usuario  
    -->


    <h3 class="text-black text-center mt-5">Crear nou recurs movil: </h3>
                <form action="{{ action('RecursMobilController@store') }}" method="POST">
                  @csrf
                  
                      {{-- estaría bien controlar el tamaño para que fuese un mínimo --}}
                    <div class="form-group row">
                        <label for="inputCodi" class="col-sm-2 offset-sm-2 col-form-label">Codi: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputCodi" name="inputCodi">
                        </div>                       
                    </div>

                    <div class="form-group row">
                        <label for="inputTipus" class="col-sm-2 offset-sm-2 col-form-label">Tipus de Recurs</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputTipus" name="inputTipus">
                        </div>                       
                    </div>

                

                    <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-2 offset-sm-2 pt-0">Tipus de recurs:</legend>

                          <div class="col-sm-6">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="id_tipus" id="id_tipus" value="1" checked>
                              <label class="form-check-label" for="id_tipus">
                              Amb. Medicalitzada-Mike
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="id_tipus" id="id_tipus" value="2">
                              <label class="form-check-label" for="id_tipus">
                              Amb. Sanitaritzada-India
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="id_tipus" id="id_tipus" value="3">
                              <label class="form-check-label" for="id_tipus">
                              Amb. Assitencial-Tango
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="id_tipus" id="id_tipus" value="4">
                              <label class="form-check-label" for="id_tipus">
                              Helicopter medicalitzat
                              </label>
                            </div>


                          </div>
                        </div>

                    </fieldset>

                    
                    <div class="form-group row">
                        <div class="col-8 my-4 offset-2">
                          <button type="submit" class="btn btn-block btn-custom1">Confirmar</button>
                        </div>
                    </div>

                </form>
           

@endsection