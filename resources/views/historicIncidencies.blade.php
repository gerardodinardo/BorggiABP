@extends('templates.plantilla')

@section('titulo', 'Broggi - Incidencies Totals')

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
  



<div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom:15%;">
    <h1>Històric Incidències</h1>
    <hr>{{-- FILTROS --}}
    <div class="row d-flex justify-content-center">
      <form action="{{ action('IncidenciaController@indexHistoricIncidencies') }}" method="post">
        @csrf 
          <button type="submit" name="id_search" class="btn btn-custom1" value="id_search">
            Ordena per Id
            <svg class="bi bi-arrow-bar-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.354 5.854a.5.5 0 000-.708l-3-3a.5.5 0 00-.708 0l-3 3a.5.5 0 10.708.708L8 3.207l2.646 2.647a.5.5 0 00.708 0z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 10a.5.5 0 00.5-.5V3a.5.5 0 00-1 0v6.5a.5.5 0 00.5.5zm-4.8 1.6c0-.22.18-.4.4-.4h8.8a.4.4 0 010 .8H3.6a.4.4 0 01-.4-.4z" clip-rule="evenodd"/>
            </svg>
          </button>
          <button type="submit" name="id_search_desc" class="btn btn-custom1" value="id_search_desc">
            Ordena per Id
            <svg class="bi bi-arrow-bar-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.354 10.146a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 01.708-.708L8 12.793l2.646-2.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5V13a.5.5 0 01-1 0V6.5A.5.5 0 018 6zM2 3.5a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
            </svg>
          </button>
          <button type="submit" name="search_date" class="btn btn-custom1" value="search_date">
            Ordena per Data
            <svg class="bi bi-arrow-bar-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.354 10.146a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 01.708-.708L8 12.793l2.646-2.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5V13a.5.5 0 01-1 0V6.5A.5.5 0 018 6zM2 3.5a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
            </svg>
          </button>
          <button type="submit" name="search_date_asc" class="btn btn-custom1" value="search_date_asc">
            Ordena per Data
            <svg class="bi bi-arrow-bar-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.354 5.854a.5.5 0 000-.708l-3-3a.5.5 0 00-.708 0l-3 3a.5.5 0 10.708.708L8 3.207l2.646 2.647a.5.5 0 00.708 0z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 10a.5.5 0 00.5-.5V3a.5.5 0 00-1 0v6.5a.5.5 0 00.5.5zm-4.8 1.6c0-.22.18-.4.4-.4h8.8a.4.4 0 010 .8H3.6a.4.4 0 01-.4-.4z" clip-rule="evenodd"/>
            </svg>
          </button>
          <!-- <button type="submit" name="direccio_search" value="2">direccio</button> -->
          <button type="submit" name="direccio_search" class="btn btn-custom1"  value="">
            Ordena per Defecte
            <svg class="bi bi-arrow-counterclockwise" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z" clip-rule="evenodd"/>
            </svg>
          </button>
      </form>
    </div>
    <hr>
    <div class="col">
        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="bg-warning">
              <tr>
                <th scope="col-sm" class="nIncidencia">Num. Incidència</th>
                <th scope="col-sm" class="localitzacio">Localització</th>
                <th scope="col-sm" class="hora">Data</th>
                <th scope="col-sm" class="hora">Hora</th>
                <th scope="col-sm" class="descripcioIncident">Descripció Incident</th>
                <th scope="col-sm" class="estat">Estat</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($incidencies as $incidencia) {{-- MUESTRA SOLO LAS ABIERTAS! --}}
                  <tr>
                    <th scope="row">{{ $incidencia->num_incidencia }}</th>
                    <td>{{ $incidencia->adreca }}</td>
                    <td>{{ $incidencia->data }}</td>
                    <td>{{ $incidencia->hora }}</td>
                    <td>{{ $incidencia->descripcio }}</td>

                    <td>
                      @php 
                        $estado = 1; 
                        $datoAComparar = $incidencia->EstatIncidencia->id ;                   
                      @endphp
                      @if($datoAComparar == $estado)
                        <img src="{{ asset('img/tick.png') }}" alt="">
                      @else
                        <img src="{{ asset('img/cancel.png') }}" alt="">
                      @endif
                    </td>
                  </tr>
              @endforeach
              
            </tbody>
          </table>
          {{ $incidencies->links() }}
    </div>
</div>

@endsection