@extends('templates.plantilla')

@section('titulo', 'Broggi - Gestió Alertants')

@section('content')
<link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
<link href="{{ asset('/css/gestioAlertants.css') }}" rel="stylesheet">

    <div id="mySidenav2" class="sidenav2">
        <a href="{{ asset('/principalIncidencies')}}" id="back">
            Torna a l'inici
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            </svg>
        </a>
    </div>
    <div class="container border col-sm-7 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom: 10%;">
        <h3 class="text-center" style="width: 100%; display: flex; position: center;">Gestió d'Alertants</h1>
        <hr>
          <a href="{{ asset('/alertantCentreSanitari')}}" class="zoom">
            <div class="row d-flex justify-content-center mt-5 text-center">
                <div class="card p-2 mr-5" style="width: 14rem; border-color: rgba(63, 0, 82, 0.493); box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(63, 0, 82, 0.493); outline: 0 none;">
                    <img class="card-img-top" src="{{ asset('img/hospBroggi.svg') }}" alt="Card image cap">
                    <div class="card-body" >
                      <h5 class="card-title">Centre Sanitari</h5>
                      <p class="card-text">
                        Edifici on s'atén a la població en un primer nivell sanitari.</p>
                    </div>
                </div>
              </a>
              <a href="{{ asset('/alertantVIP')}}" class="zoom">
                <div class="card p-2" style="width: 14rem; border-color: rgba(63, 0, 82, 0.493); box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(63, 0, 82, 0.493); outline: 0 none;">
                    <img class="card-img-top" src="{{ asset('img/pharmacist.svg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Alertant VIP</h5>
                      <p class="card-text">Aquella persona habitual, sanitaris, ambulància, metge.</p>
                    </div>
                </div>
              </a>
          </div>
        </div>
    </div>
@endsection
    