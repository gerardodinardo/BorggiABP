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
          <div class="col-sm-12">
            <p class="h2 mt-4">Recursos Mòbils Desplegats</p>
            <hr>
            <div class="col mb-4 d-flex justify-content-center">
              <button class="btn btn-custom1 col-sm-12" href="{{ asset('/nouRecursMobil.blade') }}">Crear Nou Recurs Mòbil</button>
            </div>
            <table class="table table-striped table-bordered table-hover text-center">
                <thead class="bg-warning">
                  <tr>
                    <th scope="col-sm">Tipus Recurs</th>
                    <th scope="col-sm">Direcció</th>
                    <th scope="col-sm">Descripció</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @foreach ($recursos as $recurs)
                      <tr>
                        <th scope="row"> {{ $recurs->id }} </th>
                        <td> {{ $recurs->adreca }} </td>
                        <td> {{ $recurs->descripcio }} </td>
                      </tr>
                  @endforeach --}}
                </tbody>
              </table>
              {{-- {{ $recursos->links() }} --}}
            </div>
        </div>
        
        
        
        <p class="h2 mt-4">Recursos Mòbils</p>
        <hr>
        <table class="table table-striped table-bordered table-hover text-center">
                <thead class="bg-warning">
                  <tr>
                  
                    <th scope="col-sm">ID</th>
                    <th scope="col-sm">Tipus Recurs</th>
                    <th scope="col-sm">Codi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($recursos as $recurs)
                      <tr>
                        <th scope="row"> {{ $recurs->id }} </th>
                        <td> {{ $recurs->tipusRecurs->tipus }} </td>
                        <td> {{ $recurs->codi }} </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>

      </div>
@endsection