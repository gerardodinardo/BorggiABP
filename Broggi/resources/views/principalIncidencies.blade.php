@extends('templates.plantilla')

@section('titulo', 'Broggi - Incidències')

@section('content')
    <link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
  
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px;">
        <h1>Tauler Principal Incidències </h1>
        <hr>
        <div class="col mb-4" style="background-color: #3F0052; padding:20px; border-radius: 10px; display: flex; justify-content: center; min-width: 400px; height: 100px;">
            <button type="submit" class="btn btn-custom text-center" >Gestió Alertants</button>            
            <button type="submit" class="btn btn-custom text-center">Nova Incidència</button>            
            <button type="submit" class="btn btn-custom text-center">Històric Incidències</button>
            <button type="submit" class="btn btn-custom text-center">Recursos Mòbils</button>
        </div>
        <hr>
        <div class="col">
            <table class="table table-striped table-bordered table-hover text-center">
                <thead class="table-dark">
                  <tr>
                    <th scope="col-sm" class="nIncidencia">Num. Incidència</th>
                    <th scope="col-sm">Localització</th>
                    <th scope="col-sm">Hora</th>
                    <th scope="col-sm">Descripció Incident</th>
                    <th scope="col-sm" class="estat">Estat</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><img src="{{ asset('img/tick.png') }}" alt=""></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><img src="{{ asset('img/cancel.png') }}" alt=""></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td><img src="{{ asset('img/tick.png') }}" alt=""></td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="col">
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