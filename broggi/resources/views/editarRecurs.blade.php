@extends('templates.plantilla')

@section('titulo', 'Broggi - Editar Recurs')

@section('content')
<link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
    <div id="mySidenav2" class="sidenav2">
        <a href="{{ asset('/principalIncidencies')}}" id="back">
            Torna a l'inici
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            </svg>
        </a>
    </div>
  
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom: 10%;">
        <h1 class="text-center" style="width: 100%; display: flex; position: center;">Editar Recurs</h1>
        <hr>   
        <div class="row justify-content-center">
            <div class="form-group row d-flex justify-content-center text-center">
                <div class="col-sm-6 mt-4">
                    <select class="custom-select">
                        <option selected>- Selecciona Tipus de Recurs -</option>
                        <option value="1">Amb. Medicalitzada-Mike</option>
                        <option value="2">Amb. Sanitaritzada-India</option>
                        <option value="3">Amb. Assitencial-Tango</option>
                        <option value="3">Helicopter medicalitzat</option>
                      </select>
                </div>
                <label for="formGroupExampleInput" class="col-sm-2 mt-4 col-form-label">Direcció</label>
                <div class="col-sm-4 mt-4">
                    <input class="form-control" type="tel" value="" id="formGroupExampleInput" placeholder="Ex. Carrer Torra 123">
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="form-group row d-flex justify-content-center">
                <label for="inputAddress" class="col-sm-9 mt-4 col-form-label">Descripció de l'Estat del Recurs</label>
                <textarea class="form-control col-sm-9 mt-1 mb-3 " id="exampleFormControlTextarea1" rows="3" placeholder="Ex. L'ambulanciá es troba a l'incident..."></textarea>
            </div>
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-block btn-custom1">Acceptar Canvis</button>
        </div>
    </div>
@endsection
    
