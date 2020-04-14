@extends('templates.plantilla')

@section('titulo', 'Broggi - Recursos Mòbils')

@section('content')

    <link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/backButton.css') }}" rel="stylesheet">
  <div id="mySidenav2" class="sidenav2">
    <a href="{{ asset('/principalIncidencies')}}" id="back">
        Torna a l'inici
        <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        </svg>
    </a>
  </div>
    
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="margin-bottom: 15%; padding-bottom: 25px;">
        <div class="row">
          <div class="col-sm-7 border rounded">
            <p class="h2 mt-4">Recursos Mòbils Desplegats</p>
            <hr>
            <table class="table table-striped table-bordered table-hover text-center">
                <thead class="bg-warning">
                  <tr>
                    <th scope="col-sm">Tipus Recurs</th>
                    <th scope="col-sm">Direcció</th>
                    <th scope="col-sm">Descripció</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Plaza Catalunya 123</td>
                    <td>L'ambulància és troba al lloc.</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Carrer Ibiza</td>
                    <td>L'ambulancia, está de camí a l'incident.</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <div class="col-sm-5 border rounded">
            <p class="h2 mt-4 text-center">Recursos Disponibles</p>
            <hr>
            <div class="row text-center">
                <div class="col">
                    <div class="card bg-light" style="width: 16rem; height:12rem;">
                        <div class="card-body">
                          <h5 class="card-title">Amb. Med.-Mike</h5>
                          <div class="row d-flex justify-content-around">
                            <button type="button" class="btn btn-danger btn-sm">-</button>
                            <p class="card-text" style="font-size: 4em;">100</p>
                            <button type="button" class="btn btn-success btn-sm">+</button>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-light" style="width: 16rem; height:12rem;">
                        <div class="card-body">
                          <h5 class="card-title">Amb. Med.-India</h5>
                          <div class="row d-flex justify-content-around">
                            <button type="button" class="btn btn-danger btn-sm">-</button>
                            <p class="card-text" style="font-size: 4em;">100</p>
                            <button type="button" class="btn btn-success btn-sm">+</button>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col mt-5 mb-5">
                    <div class="card bg-light" style="width: 16rem; height:12rem;">
                        <div class="card-body">
                          <h5 class="card-title">Amb. Med.-Tango</h5>
                          <div class="row d-flex justify-content-around">
                            <button type="button" class="btn btn-danger btn-sm">-</button>
                            <p class="card-text" style="font-size: 4em;">100</p>
                            <button type="button" class="btn btn-success btn-sm">+</button>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5">
                    <div class="card bg-light" style="width: 16rem; height:12rem;">
                        <div class="card-body">
                          <h5 class="card-title">Helicopter Medicalitzat</h5>
                          <div class="row d-flex justify-content-around">
                            <button type="button" class="btn btn-danger btn-sm">-</button>
                            <p class="card-text" style="font-size: 4em;">100</p>
                            <button type="button" class="btn btn-success btn-sm">+</button>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection