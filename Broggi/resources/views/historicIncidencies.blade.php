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
  
<div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px;">
    <h1>Històric Incidències</h1>
    <hr>
    <div class="col">
        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="table-dark">
              <tr>
                <th scope="col-sm" class="nIncidencia">Num. Incidència</th>
                <th scope="col-sm" class="localitzacio">Localització</th>
                <th scope="col-sm" class="hora">Hora</th>
                <th scope="col-sm" class="descripcioIncident" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Descripció Incident</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="col mt-5">
        <div aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link " href="#" tabindex="-1">Anterior</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Seguent</a>
              </li>
            </ul>
          </div>
    </div>             
</div>

@endsection