@extends('templates.plantilla'){{-- Pantalla de formulario para crear nueva incidencia con desplegables --}}

@section('titulo', 'Broggi - Afegir Incidència')


@section('content')
    <link href="{{ asset('/css/addIncidencia.css') }}" rel="stylesheet">
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px;">
        <h1>Formulari Nova Incidència</h1>
        <hr>
        <!-- ********** Start Desplegables ********** --> 
        <div class="desplegable">
            <button class="collapsible"><strong>Dades Automàtiques (Telèfon, Data i Hora)</strong></button>
            <div class="content">
                <div class="form-group row">
                    <label for="example-tel-input" class="col-sm-1 mt-4 col-form-label" style="margin-left:80px;">Telèfon</label>
                    <div class="col-sm-4 mt-4">
                        <input class="form-control" type="tel" value="" id="example-tel-input" placeholder="Ej. 616105478">
                    </div>
                    <label for="example-datetime-local-input" class="col-sm-1.5 mt-4 col-form-label">Data / Hora</label>
                    <div class="col-sm-4 mt-4">
                        <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                    </div>
                </div>
            </div>
        </div>
        <!-- ********** Fin Desplegable 1 ********** -->
        <script src="{{ asset('/js/addIncidenciaSelecciones.js') }}"></script>{{-- Js resultado aparecer div segun selector --}}
        <div class="desplegable">
            <button class="collapsible"><strong>Identificació - Classificació Alertant</strong></button>
            <div class="content">
                <select class="custom-select mt-4 mb-4" select id="getFname" onchange="admSelectCheck(this);">
                    <option selected>- Slecciona un tipus d'Alertant-</option>
                    <option id="centreSanitari"value="1">Centre Sanitari</option>
                    <option id="personaAfectada"value="2">Persona Afectada</option>
                    <option id="entornAfectat" value="3">Entorn de l'Afectat</option>
                    <option id="alertantVip" value="4">Alertant VIP</option>
                  </select>
                  {{-- divs a mostrar despues de execute javascript, los divs estan default display:none --}}
                <div id="divcentreSanitari" style="display:none;">
                    centreSanitari selected
                    <div class="form-group row">
                        <label for="example-metge-input" class="col-sm-2 mt-4 col-form-label">Nom del Metge: </label>
                        <div class="col-sm-4 mt-4">
                            <input class="form-control" type="metge" value="" id="example-metge-input" placeholder="">
                        </div>
                    </div>
                </div>  
                <div id="divpersonaAfectada" style="display:none;">
                    personaAfectada selected
                </div>
                <div id="diventornAfectat" style="display:none;">
                    <p>entornAfectat selected</p>
                </div>   
                <div id="divalertantVip" style="display:none;">
                    alertantVip selected
                </div>
            </div>
        </div>        
        <!-- ********** Fin Desplegable 2 ********** -->
        <div class="desplegable">
            <button class="collapsible"><strong>Localització</strong></button>
            <div class="content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet quis corporis fugit facilis modi veritatis, ipsa sunt reiciendis in cumque neque reprehenderit maiores assumenda commodi at molestias, rerum a iure!</p>
            </div>   
        </div>      
        <!-- ********** Fin Desplegable 3 ********** -->  
        <div class="desplegable">     
            <button class="collapsible"><strong>Dades Afectat</strong></button>
            <div class="content">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut dolor repudiandae sed vitae laboriosam accusantium! Quae asperiores repellat consequatur optio cumque iure pariatur dolorum praesentium dignissimos, fugit, numquam corrupti sapiente?</p>
            </div>  
        </div>
        <!-- ********** Fin Desplegable 4 ********** -->    
        <div class="desplegable">          
            <button class="collapsible"><strong>Classificació Incident</strong></button>
            <div class="content">
                <p>Loremaa ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div> 
        </div>
        <!-- ********** Fin Desplegable 5 ********** -->  
        <div class="desplegable">              
            <button class="collapsible"><strong>Recursos Mòbils</strong></button>
            <div class="content">
                <p>Loremaa ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
    </div>

@endsection