@extends('templates.plantilla'){{-- Pantalla de formulario para crear nueva incidencia con desplegables --}}

@section('titulo', 'Broggi - Crear VIP')


@section('content')

<link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
<div id="mySidenav2" class="sidenav2">
    <a href="{{ asset('/gestioAlertants')}}" id="back">
        Torna a l'inici
        <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        </svg>
    </a>
</div>
<div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom: 10%;">
    <h3 class="text-center" style="width: 100%; display: flex; position: center;">Creació Alertant VIP</h1>
    <hr>
    <form action="{{ action('AlertantController@store') }}" method="post">
        @csrf
        <div class="col-sm-12 mt-4">
            <input class="form-control" type="text" name="nom"  id="nom" placeholder="Nom Alertant VIP">
        </div>
        
        <div class="col-sm-12 mt-4">
            <input class="form-control" type="text" name="cognom"  id="cognom" placeholder="Cognom Alertant VIP - Opcional">
        </div>
        <div class="col-sm-12 mt-4">
            <input class="form-control" type="telf" name="telefon" id="telefon" placeholder="Ex. 616225478">
        </div>
        <div class="form-group row d-flex justify-content-center">
            <label for="inputAddressdsf" class="col-sm-1 mt-4 col-form-label">Adreça</label>
            <div class="col-sm-4 mt-4">
                <input type="text" class="form-control" id="adreca" name="adreca" placeholder="Ej. Passeig de Sant Martí">
            </div>
        </div>
        <select class="custom-select mt-4 mb-4 col-sm-3" select  id="municipis_id" name="municipis_id">
            <option selected>- Municipi -</option>
                @foreach($municipis as $municipi)
                    <option value="{{$municipi->id}}">
                        {{$municipi->nom}}
                    </option>
                @endforeach
        </select>
        <select class="custom-select mt-4 mb-4 col-sm-3" select id="tipus_alertant_id" id="tipus_alertant_id" name="tipus_alertant_id">
            <option selected>- Tipus Alertant -</option>
                @foreach($tipusAlertants as $tipusA)
                    <option value="{{$tipusA->id}}">
                        {{$tipusA->tipus}}
                    </option>
                @endforeach
        </select>
        
    <div class="text-center pb-4">
        <button type="submit" class="btn btn-custom1 mb-1 btn-lg" style="width:70%;">Crear</button>
        <a type="submit" class="btn btn-danger mb-1 btn-lg" style="width:70%;" href="{{ asset('/gestioRecursos')}}">Cancelar</a>
    </div> 
    </form> 
    
</div>  

@endsection