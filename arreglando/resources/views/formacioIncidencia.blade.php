@extends('templates.plantilla')

@section('titulo', 'Broggi - Formacio')

@section('content')

<link href="{{ asset('/css/addIncidencia.css') }}" rel="stylesheet">
<link href="{{ asset('/css/formacio.css') }}" rel="stylesheet">
    <div id="mySidenav2" class="sidenav2">
        <a href="{{ asset('/')}}" id="back">
            Torna a l'inici
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            </svg>
        </a>
    </div>
  
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom: 10%;">
        <h1 class="text-center" style="width: 100%; display: flex; position: center;">Formació Nova Incidència!</h1>
        <hr>
        <p>A continuació, una formació del mateix formulari que trobareu en el mode Simulació.</p>
        <h3>¿Com funciona el mode formació?</h3>
        <p>Com pots observar tenim el mateix formulari que en el mode Simulació Real,
             amb la diferència de tenir un vídeo explicatiu. Per accedir a la part del vídeo especìfica,
            has de fer click en el botó que veurás a continuació, aquest automàticament mostrarà la part desitjada.
        </p>
        <hr>
        <div class="desplegable">
            <div class="row d-flex justify-content-between">
                <button class="collapsible col-sm-11" id="coll1" disabled><strong>Dades Automàtiquess (Telèfon, Data i Hora)</strong></button>
                <button class="btn btn-info col-sm-1" style="border-radius: 0px;" onclick="getCurTime(5);location.href='#myVideo';" value="5">Veure Video</button>
            </div>
            <div class="content">
                <div class="form-group row d-flex justify-content-center">
                    <label for="telefon" class="col-sm-1 mt-4 col-form-label">Telèfon</label>
                    <div class="col-sm-2 mt-4">
                        <input class="form-control" type="tel"  id="telefon" placeholder="Ej. 616105478">
                    </div>
                    
                    <label for="fecha" class="col-sm-1 mt-4 col-form-label">Data</label>
                    <div class="col-sm-2 mt-4">
                            <input class="form-control" type="date"  id="data">
                    </div>

                    <label for="currentTime" class="col-sm-1 mt-4 col-form-label">Hora</label>
                    <div class="col-sm-2 mt-4">
                        <input class="form-control" type="time" id="hora">
                    </div>

                    <select class="custom-select mt-4 mb-4 col-sm-1" select id="estat" id="estat" name="estat">
                        <option selected>Estat</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- ********** Fin Desplegable 1 ********** -->
        <div class="desplegable" > 
            <div class="row d-flex justify-content-between">
                <button class="collapsible col-sm-11" id="coll" disabled><strong>Identificació - Classificació Alertant</strong></button>
                <button class="btn btn-info col-sm-1" style="border-radius: 0px;" onclick="getCurTime(20);location.href='#myVideo';" value="20">Veure Video</button>
            </div>    
            <div class="content">
                <select class="custom-select mt-4 mb-4" select id="tipusAlertant"  id="tipusAlertant" name="tipusAlertant">
                    <option selected>- Slecciona un tipus d'Alertant-</option>
                    <option id="centreSanitari" value="1">Centre Sanitari</option>
                    <option id="personaAfectada"value="2">Persona Afectada</option>
                    <option id="entornAfectat" value="3">Entorn de l'Afectat</option>
                    <option id="alertantVip" value="4">Alertant VIP</option>
                    <option id="alertantAccidental" value="5">Alertant Accidental</option>
                </select>
            </div>
        <!-- ********** Fin Desplegable 2 ********** -->
        <div class="desplegable">
            <div class="row d-flex justify-content-between">
                <button class="collapsible col-sm-11" id="coll3" disabled><strong>Localització</strong></button>
                <button class="btn btn-info col-sm-1" style="border-radius: 0px;" onclick="getCurTime(40);location.href='#myVideo';" value="40">Veure Video</button>
            </div>    
            <div class="content">
                <div class="form-group row d-flex justify-content-center">
                    <select class="custom-select mt-4 mb-4 col-sm-3" select id="provincia" id="provincia" name="provincies[]">
                        <option selected>- Provincia -</option>
                    </select>
                    <select class="custom-select mt-4 mb-4 ml-2 mr-2 col-sm-3" select id="comarca" id="comarca" name="comarques[]">
                        <option selected>- Comarca -</option>
                    </select>
                    <select class="custom-select mt-4 mb-4 col-sm-3" select id="municipi" id="municipi" name="municipi">
                        <option selected>- Municipi -</option>
                    </select>
                </div>
                <hr>
                <div class="form-group row d-flex justify-content-center">
                    <label for="inputAddressdsf" class="col-sm-1 mt-4 col-form-label">Adreça</label>
                    <div class="col-sm-4 mt-4">
                        <input type="text" class="form-control" id="adreca" name="adreca" placeholder="Ej. Passeig de Sant Martí">
                    </div>
                </div>
                <hr>
                <div class="form-group row d-flex justify-content-center">
                    <label for="inputAddressxd" class="col-sm-9 mt-4 col-form-label"><strong>Informació Adicional --> Adreça</strong></label>
                    <textarea class="form-control col-sm-9 mt-1 mb-3 " name="complement_adreca" id="complement_adreca" rows="3" placeholder="Ej. Al costat d'una gasolinera vermella..." ></textarea>
                </div>
            </div>   
        </div>      
        <!-- ********** Fin Desplegable 3 ********** !-->  
        <div class="desplegable">     
            <div class="row d-flex justify-content-between">
                <button class="collapsible  col-sm-11" id="coll4" disabled><strong>Dades Afectat</strong></button>
                <button class="btn btn-info col-sm-1" style="border-radius: 0px;" onclick="getCurTime(60);location.href='#myVideo';" value="60">Veure Video</button>
            </div>    
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
            <div class="row d-flex justify-content-between">      
                <button class="collapsible  col-sm-11" id="coll5" disabled><strong>Classificació Incident </strong></button>
                <button class="btn btn-info col-sm-1" style="border-radius: 0px;" onclick="getCurTime(75);location.href='#myVideo';" value="75">Veure Video</button>
            </div>    
            <div class="content">
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-sm-9 mt-4">
                        <select class="custom-select mt-4 mb-4" select id="tipusIncident" name="tipusIncident">
                            <option selected>- Tipus Incident -</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="descripcio" class="col-sm-9 mt-4 col-form-label"><strong>Informació Adicional --> Incident</strong></label>
                    <textarea class="form-control col-sm-9 mt-1 mb-3 " id="descripcio" name="descripcio" rows="3" placeholder="Ej. Traumatisme a causa d'un accident..."></textarea>
                </div>
            </div> 
        </div>
        <!-- ********** Fin Desplegable 5 ********** -->  
        <div class="desplegable" >  
            <div class="row d-flex justify-content-between">            
                <button class="collapsible col-sm-11" id="coll6" disabled><strong>Assignació de Recursos Mòbils</strong></button>
                <button class="btn btn-info col-sm-1" style="border-radius: 0px;" onclick="getCurTime(90);location.href='#myVideo';" value="90">Veure Video</button>
            </div>    
            <div class="content">
                <select class="custom-select mt-4 mb-4" select id="getFname" id="tipusRecurs" name="tipusRecurs">
                    <option selected>- Tipus Recurs Mòbil -</option>
                </select>
                <p class="text-center"><strong>- Selecciona una Prioritat -</strong></p>
                <div class="row d-flex justify-content-center mb-5 mt-5">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="prioritat" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="customRadioInline1">&rarr;1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="prioritat" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="customRadioInline2">&rarr;2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="prioritat" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="customRadioInline3">&rarr;3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline4" name="prioritat" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="customRadioInline4">&rarr;4</label>
                      </div>
                </div>
            </div>
        </div>  
        <!-- ********** Fin Desplegable 6 ********** --> 
        <hr>
        <div class="text-center pb-4">
            <button type="submit" class="btn btn-success mb-1 btn-lg" style="width:70%;" disabled>Enviar</button>
            <button type="submit" class="btn btn-danger mb-1 btn-lg" style="width:70%;" disabled>Cancelar</button>
        </div>  
    </form>
    <hr>
    <div class="embed-responsive embed-responsive-16by9">
        <video id="myVideo" name="myVideo" controls>
            <source src="{{ asset('videos/video_formacio.mp4') }}" type="video/mp4">
        </video>
    </div>
    
    <script>
        var vid = document.getElementById("myVideo");
        
        function getCurTime(timeValue) { 
          vid.currentTime= timeValue;
        } 
    </script> 
        
</div>
@endsection
    
