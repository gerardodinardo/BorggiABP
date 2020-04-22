@extends('templates.plantilla'){{-- Pantalla de formulario para crear nueva incidencia con desplegables --}}

@section('titulo', 'Broggi - Afegir Incidència')


@section('content')

    <div id="mySidenav2" class="sidenav2">
        <a href="{{ asset('/principalIncidencies')}}" id="back">
            Torna a l'inici
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            </svg>
        </a>
    </div>

    <link href="{{ asset('/css/addIncidencia.css') }}" rel="stylesheet">
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px;">
        <h1>Nova Incidència</h1>
        <hr>
        <button type="submit" class="btn btn-info text-center btn-lg" style="width:70%; margin-left: 15%;" onclick="location.href='{{ url('/principalIncidencies') }}'">Menú Principal Incidències</button>
        <hr>
        <!-- ********** Start Desplegables ********** -->
        <form action="{{ action('IncidenciaController@store') }}" method="post">
            @csrf
            <div class="desplegable">
                <button class="collapsible" id="coll1" disabled><strong>Dades Automàtiquess (Telèfon, Data i Hora)</strong></button>
                <div class="content">
                    <div class="form-group row d-flex justify-content-center">
                        <label for="telefon" class="col-sm-1 mt-4 col-form-label">Telèfon</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" name="telefon" value="{{ old('telefon') }}" id="telefon" placeholder="Ej. 616105478">
                        </div>
                        <label for="fecha" class="col-sm-1 mt-4 col-form-label">Data</label>
                        <div class="col-sm-2 mt-4">
                                <input class="form-control" type="date" name="data" value="{{ old('data') }}" id="data">
                        </div>
                        <label for="currentTime" class="col-sm-1 mt-4 col-form-label">Hora</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="time" name="hora" value=" {{ old('hora') }} " id="hora">
                        </div>
                        <select class="custom-select mt-4 mb-4 col-sm-1" select id="estat" id="estat" name="provincies[]">
                            <option selected>Estat</option>
                                @foreach($estats as $estat)
                                    <option value="{{$estat->id}}">
                                        {{$estat->estat}}
                                    </option>
                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <!-- ********** Fin Desplegable 1 ********** -->
            <script src="{{ asset('/js/addIncidenciaSelecciones.js') }}"></script>{{-- Js resultado aparecer div segun selector --}}
            <div class="desplegable" > 
                <button class="collapsible" id="coll" disabled><strong>Identificació - Classificació Alertant</strong></button>
                <div class="content">
                    <select class="custom-select mt-4 mb-4" select id="tipusAlertant" onchange="admSelectCheck(this);" id="tipusAlertant" name="tipuAlertant[]">
                        <option selected>- Slecciona un tipus d'Alertant-</option>
                            {{-- @foreach($tipusAlertants as $tipuAlertant)//Opcion de For EACH Funciona, No vàlida para mostrar los divs a continuación, x value 1-4
                                <option value="{{$tipuAlertant->id}}">
                                    {{$tipuAlertant->tipus}}
                                </option>
                            @endforeach --}}
                        <option id="centreSanitari" value="1">Centre Sanitari</option>
                        <option id="personaAfectada"value="2">Persona Afectada</option>
                        <option id="entornAfectat" value="3">Entorn de l'Afectat</option>
                        <option id="alertantVip" value="4">Alertant VIP</option>
                        <option id="alertantAccidental" value="5">Alertant Accidental</option>
                    </select>
                    {{-- divs a mostrar despues de execute javascript, los divs estan default display:none --}}
                    <div id="divcentreSanitari" style="display:none;">
                        <div class="form-group row d-flex justify-content-center">
                            <label for="metge" class="col-sm-2 mt-4 col-form-label">Nom del Metge:</label>
                            <div class="col-sm-6 mt-4">
                                <input class="form-control" type="metge" name="metge"  id="metge" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <p class="text-center mb-4 col-sm-2">Centre Sanitari: </p>
                            <select class="custom-select  mb-4 col-sm-6" select id="id_alertant" id="id_alertant" name="provincies[]">
                                <option selected>- Selecciona un Centre Sanitari -</option>
                                    @foreach($alertants as $alertant)
                                        <option value="{{$alertant->id}}">
                                            {{$alertant->nom}}
                                        </option>
                                    @endforeach
                            </select> 
                        </div>       
                    </div>  
                    <div id="divalertantVip" style="display:none;">
                        <div class="form-group row d-flex justify-content-center">
                            <p class="text-center mb-4 col-sm-2">Alertant VIP: </p>
                            <select class="custom-select  mb-4 col-sm-6" select id="getFname" id="provincies" name="provincies[]">
                                <option selected>- Selecciona Alerant VIP -</option>
                                    @foreach($alertants as $alertant)
                                        <option value="{{$alertant->id}}">
                                            {{$alertant->nom}}
                                        </option>
                                    @endforeach
                            </select> 
                        </div>       
                    </div>
                </div>
            </div>        
            <!-- ********** Fin Desplegable 2 ********** -->
            <div class="desplegable">
                <button class="collapsible" id="coll3" disabled><strong>Localització</strong></button>
                <div class="content">
                    <div class="form-group row d-flex justify-content-center">
                        <select class="custom-select mt-4 mb-4 col-sm-3" select id="provincia" id="provincia" name="provincies[]">
                            <option selected>- Provincia -</option>
                                @foreach($provincies as $provincia)
                                    <option value="{{$provincia->id}}">
                                        {{$provincia->nom}}
                                    </option>
                                @endforeach
                        </select>
                        <select class="custom-select mt-4 mb-4 ml-2 mr-2 col-sm-3" select id="comarca" id="comarca" name="comarques[]">
                            <option selected>- Comarca -</option>
                                @foreach($comarques as $comarca)
                                    <option value="{{$comarca->id}}">
                                        {{$comarca->nom}}
                                    </option>
                                @endforeach
                        </select>
                        <select class="custom-select mt-4 mb-4 col-sm-3" select id="municipi" id="municipi" name="municipis[]">
                            <option selected>- Municipi -</option>
                                @foreach($municipis as $municipi)
                                    <option value="{{$municipi->id}}">
                                        {{$municipi->nom}}
                                    </option>
                                @endforeach
                        </select>
                    </div>
                    <hr>
                    <div class="form-group row d-flex justify-content-center">
                        <label for="inputAddress" class="col-sm-1 mt-4 col-form-label">Adreça</label>
                        <div class="col-sm-4 mt-4">
                            <input type="text" class="form-control" id="inputAddress" placeholder="Ej. Passeig de Sant Martí" value=" {{ old('adreca') }} ">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row d-flex justify-content-center">
                        <label for="inputAddress" class="col-sm-9 mt-4 col-form-label"><strong>Informació Adicional --> Adreça</strong></label>
                        <textarea class="form-control col-sm-9 mt-1 mb-3 " id="complementAddress" rows="3" placeholder="Ej. Al costat d'una gasolinera vermella..." value=" {{ old('complement_adreca') }}"></textarea>
                    </div>
                </div>   
            </div>      
            <!-- ********** Fin Desplegable 3 ********** !-->  
            <div class="desplegable">     
                <button class="collapsible" id="coll4" disabled><strong>Dades Afectat</strong></button>
                <div class="content">
                    <div class="form-group row d-flex justify-content-center">
                        <label for="cip" class="col-sm-1 mt-4 col-form-label">CIP</label>
                        <div class="col-sm-2 mt-4">
                          <input class="form-control" type="tel"   {{--value=" {{ old('cip') }} "--}}  id="cip" placeholder="Ej. XX99000999" name="cip">
                        </div>
                        <label for="telefon2" class="col-sm-1 mt-4 col-form-label">Teléfon</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel"  {{--value=" {{ old('telefon2') }} "--}} id="telefon2" name="telefon2" placeholder="Ej. 666999666">
                        </div> 
                    </div>
                    <hr>
                    <div class="form-group row d-flex justify-content-center">
                        <label for="edad" class="col-sm-1 mt-4 col-form-label">Edat</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" {{--value=" {{ old('edad') }}"--}} name="edad" id="edad" placeholder="Ej. 27">
                        </div>
                        <label for="formGroupExampleInput" class="col-sm-1 mt-4 col-form-label">Sexe</label>
                        <div class="col-sm-2 mt-4">
                            <select class="custom-select">
                                <option selected>- Selecciona Sexe -</option>
                                <option value="1">Home</option>
                                <option value="2">Dona</option>
                                <option value="3">Altres</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <label for="nom" class="col-sm-0.5 mt-4 col-form-label">Nom</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" {{--value=" {{ old('nom') }}"--}} name="nom" id="nom" placeholder="Ej. Lorena">
                        </div> 
                        <label for="cognom" class="col-sm-1 mt-4 col-form-label">1r Cognom</label>
                        <div class="col-sm-3 mt-4">
                            <input class="form-control" type="tel" {{--value=" {{ old('cognom') }}" --}}id="cognom" name="cognom" placeholder="Ej. García">
                        </div>
                        <label for="cognom2" class="col-sm-1.5 mt-4 mb-4 col-form-label">2n Cognom</label>
                        <div class="col-sm-3 mt-4">
                            <input class="form-control" type="tel" {{--value=" {{ old('cognom2') }} "--}} id="cognom2" name="cognom2" placeholder="Ej. Torra">
                        </div>
                    </div>
                </div>  
            </div>
            <!-- ********** Fin Desplegable 4 ********** -->    
            <div class="desplegable">          
                <button class="collapsible" id="coll5" disabled><strong>Classificació Incident</strong></button>
                <div class="content">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-sm-9 mt-4">
                            <select class="custom-select mt-4 mb-4" select id="tipusIncident" name="tipusIncident[]">
                                <option selected>- Tipus Incident -</option>
                                    @foreach($tipusIncidents as $tipoIncident)
                                        <option value="{{$tipoIncident->id}}">
                                            {{$tipoIncident->tipus}}
                                        </option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <label for="descripcio" class="col-sm-9 mt-4 col-form-label"><strong>Informació Adicional --> Incident</strong></label>
                        <textarea class="form-control col-sm-9 mt-1 mb-3 " id="descripcio" rows="3" placeholder="Ej. Traumatisme a causa d'un accident..." value="{{ old('descripcio') }}"></textarea>
                    </div>
                </div> 
            </div>
            <!-- ********** Fin Desplegable 5 ********** -->  
            <div class="desplegable" >              
                <button class="collapsible" id="coll6" disabled><strong>Assignació de Recursos Mòbils</strong></button>
                <div class="content">
                    <select class="custom-select mt-4 mb-4" select id="getFname" id="tipusIncident" name="tipusIncident[]">
                        <option selected>- Tipus Recurs Mòbil -</option>
                            @foreach($tipusRecurs as $trecur)
                                <option value="{{$trecur->id}}">
                                    {{$trecur->tipus}}
                                </option>
                            @endforeach
                    </select>
                    <p class="text-center"><strong>- Selecciona una Prioritat -</strong></p>
                    <div class="row d-flex justify-content-center mb-5 mt-5">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">&rarr;1</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">&rarr;2</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">&rarr;3</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline4">&rarr;4</label>
                          </div>
                    </div>
                </div>
            </div>  
            <!-- ********** Fin Desplegable 6 ********** --> 
            <hr>
            <div class="text-center pb-4">
                <button type="" class="btn btn-warning mb-1 btn-lg" style="width:70%;" onClick="window.location.reload();">Netejar Formulari</button>
                <button type="submit" class="btn btn-success mb-1 btn-lg" style="width:70%;">Enviar</button>
                <button type="" class="btn btn-danger mb-1 btn-lg" style="width:70%;" onclick="location.href='{{ url('/') }}'">Tornar / Cancelar</button>
            </div>  
            
        </form>
    </div>
</div> 

@endsection