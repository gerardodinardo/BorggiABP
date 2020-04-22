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
                <button class="collapsible" id="coll1"><strong>Dades Automàtiquess (Telèfon, Data i Hora)</strong></button>
                <div class="content">
                    <div class="form-group row d-flex justify-content-center">
                        <label for="telefon" class="col-sm-1 mt-4 col-form-label">Telèfon</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" name="telefon" value="{{ old('telefon') }}" id="telefon" placeholder="Ej. 616105478">
                        </div>
                        <label for="fecha" class="col-sm-1 mt-4 col-form-label">Data</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="date" name="fecha" value="{{ old('fecha') }}" id="fecha">
                        </div>
                        <label for="currentTime" class="col-sm-1 mt-4 col-form-label">Hora</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="time" name="currentTime" value=" {{ old('currentTime') }} " id="currentTime">
                            <script>
                                var date = new Date();
                                var currentTime = date.getHours() + ':' + date.getMinutes();
                                document.getElementById('currentTime').value = currentTime;
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ********** Fin Desplegable 1 ********** -->
            <script src="{{ asset('/js/addIncidenciaSelecciones.js') }}"></script>{{-- Js resultado aparecer div segun selector --}}
            <div class="desplegable">
                <button class="collapsible" id="coll"><strong>Identificació - Classificació Alertant</strong></button>
                <div class="content">
                    <select class="custom-select mt-4 mb-4" select id="getFname" onchange="admSelectCheck(this); reabrir();" id="desplegable_alertant" name="tipuAlertant[]">
                        <option selected>- Slecciona un tipus d'Alertant-</option>
                            @foreach($tipusAlertants as $tipuAlertant)
                                <option value="{{$tipuAlertant->id}}">
                                    {{$tipuAlertant->tipus}}
                                </option>
                            @endforeach
                        {{-- <option id="centreSanitari"value="1">Centre Sanitari</option>
                        <option id="personaAfectada"value="2">Persona Afectada</option>
                        <option id="entornAfectat" value="3">Entorn de l'Afectat</option>
                        <option id="alertantVip" value="4">Alertant VIP</option> --}}
                    </select>
                    {{-- divs a mostrar despues de execute javascript, los divs estan default display:none --}}
                    <div id="divcentreSanitari" style="display:none;">
                        <div class="form-group row">
                            <label for="metge" class="col-sm-2 mt-4 col-form-label">Nom del Metge: </label>
                            <div class="col-sm-4 mt-4">
                                <input class="form-control" type="metge" name="metge" value=" {{ old('metge') }} " id="metge" placeholder="">
                            </div>
                        </div>
                        <p>S'han de mostrar dades de l'alertant automàticament (backend)</p>
                        <p><strong>Has seleccionat Perona Afectada</strong></p>
                    </div>  
                    <div id="divpersonaAfectada" style="display:none;">
                        <p><strong>Has seleccionat Perona Afectada</strong></p>
                    </div>
                    <div id="diventornAfectat" style="display:none;">
                        <p><strong>Has seleccionat Entorn Afectat</strong></p>
                    </div>   
                    <div id="divalertantVip" style="display:none;">
                        <p><strong>S'ha de buscar l'alertant VIP (backend)</strong></p>
                    </div>
                </div>
            </div>        
            <!-- ********** Fin Desplegable 2 ********** -->
            <div class="desplegable">
                <button class="collapsible" id="coll3"><strong>Localització</strong></button>
                <div class="content">
                    <div class="form-group row d-flex justify-content-center">
                        <label for="localitzacio" class="col-sm-1 mt-4 col-form-label"></label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" value=" {{ old('localitzacio') }} " id="localitzacio" placeholder="Ej. Barcelona">
                        </div>
                        {{-- <label for="formGroupExampleInput" class="col-sm-1 mt-4 col-form-label">Província</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" value="" id="formGroupExampleInput" placeholder="Ej. Barcelona">
                        </div>
                        <label for="formGroupExampleInput" class="col-sm-1 mt-4 col-form-label">Comarca</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" value="" id="formGroupExampleInput" placeholder="Ej. Barcelonés">
                        </div> 
                        <label for="formGroupExampleInput" class="col-sm-1 mt-4 col-form-label">Municipi</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" value="" id="formGroupExampleInput" placeholder="Ej. Granollers">
                        </div> --}}
                    </div>
                    <hr>
                    <div class="form-group row d-flex justify-content-center">
                        <label for="inputAddress" class="col-sm-1 mt-4 col-form-label">Adreça</label>
                        <div class="col-sm-4 mt-4">
                            <input type="text" class="form-control" id="inputAddress" placeholder="Ej. Passeig de Sant Martí" value=" {{ old('inputAdress') }} ">
                        </div>
                        <label for="inputTipusCarrer" class="col-sm-2 mt-4 col-form-label">Tipus Carrer</label>
                        <div class="col-sm-3 mt-4">
                            <select class="custom-select">
                                <option selected>- Selecciona un Tipus de Carrer -</option>
                                <option value="1">Avenida</option>
                                <option value="2">Passeig</option>
                                <option value="3">Carrer</option>
                                <option value="3">Plaça</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row d-flex justify-content-center">
                        <label for="inputAddress" class="col-sm-9 mt-4 col-form-label"><strong>Informació Adicional --> Adreça</strong></label>
                        <textarea class="form-control col-sm-9 mt-1 mb-3 " id="exampleFormControlTextarea1" rows="3" placeholder="Ej. Al costat d'una gasolinera vermella..."></textarea>
                    </div>
                </div>   
            </div>      
            <!-- ********** Fin Desplegable 3 ********** -->  
            <div class="desplegable">     
                <button class="collapsible" id="coll4"><strong>Dades Afectat</strong></button>
                <div class="content">
                    <div class="form-group row d-flex justify-content-center">
                        <label for="cip" class="col-sm-1 mt-4 col-form-label">CIP</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" value=" {{ old('cip') }} " id="cip" placeholder="Ej. XX99000999" name="cip">
                        </div>
                        <label for="telefon" class="col-sm-1 mt-4 col-form-label">Teléfon</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" value=" {{ old('telefon') }} " id="telefon" name="telefon" placeholder="Ej. 666999666">
                        </div> 
                    </div>
                    <hr>
                    <p><strong>S'ha de buscar segons Tel o CIP i omplir dades següents automàticament(backend) si es troba, omplir a mà...</strong></p>
                    <div class="form-group row d-flex justify-content-center">
                        <label for="edad" class="col-sm-1 mt-4 col-form-label">Edat</label>
                        <div class="col-sm-2 mt-4">
                            <input class="form-control" type="tel" value=" {{ old('edad') }}" name="edad" id="edad" placeholder="Ej. 27">
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
                            <input class="form-control" type="tel" value=" {{ old('nom') }}" name="nom" id="nom" placeholder="Ej. Lorena">
                        </div> 
                        <label for="cognom" class="col-sm-1 mt-4 col-form-label">1r Cognom</label>
                        <div class="col-sm-3 mt-4">
                            <input class="form-control" type="tel" value=" {{ old('cognom') }}" id="cognom" name="cognom" placeholder="Ej. García">
                        </div>
                        <label for="cognom2" class="col-sm-1.5 mt-4 mb-4 col-form-label">2n Cognom</label>
                        <div class="col-sm-3 mt-4">
                            <input class="form-control" type="tel" value=" {{ old('cognom2') }} " id="cognom2" name="cognom2" placeholder="Ej. Torra">
                        </div>
                    </div>
                </div>  
            </div>
            <!-- ********** Fin Desplegable 4 ********** -->    
            <div class="desplegable">          
                <button class="collapsible" id="coll5"><strong>Classificació Incident</strong></button>
                <div class="content">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-sm-9 mt-4">
                            <select class="custom-select">
                                <option selected>- Selecciona una Classificació -</option>
                                <option value="1">Accidents / Traumatisme</option>
                                <option value="2">Malaltia lloc públic</option>
                                <option value="3">Malaltia Domicili</option>
                                <option value="4">Consulta Mèdica</option>
                                <option value="5">Transport Sanitari</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <label for="inputAddress" class="col-sm-9 mt-4 col-form-label"><strong>Informació Adicional --> Incident</strong></label>
                        <textarea class="form-control col-sm-9 mt-1 mb-3 " id="exampleFormControlTextarea1" rows="3" placeholder="Ej. Al costat d'una gasolinera vermella..."></textarea>
                    </div>
                </div> 
            </div>
            <!-- ********** Fin Desplegable 5 ********** -->  
            <div class="desplegable">              
                <button class="collapsible" id="coll6"><strong>Assignació de Recursos Mòbils</strong></button>
                <div class="content">
                    <p><strong>Falta por acabar, discutir en grupo...</strong></p>
                </div>
            </div>  
            <!-- ********** Fin Desplegable 6 ********** --> 
            
            <script> //Script abrir cerrar desplegables
                var coll = document.getElementsByClassName("collapsible");
                var i;
                
                for (i = 0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.maxHeight){
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    } 
                    });
                }
                
            </script>
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