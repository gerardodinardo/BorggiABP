@extends('templates.plantilla')

@section('titulo', 'Broggi - Gestió Alertants')

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
        <h3 class="text-center" style="width: 100%; display: flex; position: center;">Gestió d'Alertants</h1>
        <hr>
        <div class="row d-flex justify-content-around mt-5 text-center">
            <div class="card p-2" style="width: 14rem; border-color: rgba(4, 0, 233, 0.61); box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(4, 0, 233, 0.61); outline: 0 none;">
                <img class="card-img-top" src="{{ asset('img/hospBroggi.svg') }}" alt="Card image cap">
                <div class="card-body" >
                  <h5 class="card-title">Centre Sanitari</h5>
                  <p class="card-text">
                    Fa referència a l'edifici on s'atén a la població en un primer nivell sanitari.</p>
                  <span class="badge badge-info badge-pill">14</span>
                </div>
            </div>
            <div class="card p-2" style="width: 14rem; border-color: rgba(4, 0, 233, 0.61); box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(4, 0, 233, 0.61); outline: 0 none;">
                <img class="card-img-top" src="{{ asset('img/headache.svg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">El propi afectat</h5>
                  <p class="card-text">La incidència es relaciona directament amb l'afectat en qüestió.</p>
                  <span class="badge badge-info badge-pill">10</span>
                </div>
            </div>
            <div class="card p-2" style="width: 14rem; border-color: rgba(4, 0, 233, 0.61); box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(4, 0, 233, 0.61); outline: 0 none;">
                <img class="card-img-top" src="{{ asset('img/enterprise.svg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Entorn de l'afectat</h5>
                  <p class="card-text">L'afectat no está directament relacionat amb l'emissor de la trucada a emergències.</p>
                  <span class="badge badge-info badge-pill">22</span>
                </div>
            </div>
            <div class="card p-2" style="width: 14rem; border-color: rgba(4, 0, 233, 0.61); box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(4, 0, 233, 0.61); outline: 0 none;">
                <img class="card-img-top" src="{{ asset('img/pharmacist.svg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Alertant VIP</h5>
                  <p class="card-text">Aquella persona habitual, sanitaris, ambulància, metge.</p>
                  <span class="badge badge-info badge-pill">33</span>
                </div>
            </div>
            <div class="card p-2" style="width: 14rem; border-color: rgba(4, 0, 233, 0.61); box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(4, 0, 233, 0.61); outline: 0 none;">
                <img class="card-img-top" src="{{ asset('img/sid-view.svg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Alertant accidental</h5>
                  <p class="card-text">L'alertant no está afectat directament en la incidència.</p>
                  <span class="badge badge-info badge-pill">52</span>
                </div>
            </div>
        </div>
    </div>
@endsection
    