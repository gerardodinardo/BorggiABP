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

  filtro --> 
  
  <form action="{{ action('IncidenciaController@indexHistoricIncidencies') }}" method="POST">
  @csrf 
     <button type="submit" name="id_search" value="1">id</button>
     <button type="submit" name="direccio_search" value="2">direccio</button>
  </form>



<div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px;">
    <h1>Històric Incidències</h1>
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