@extends('templates.plantilla')

@section('titulo', 'Broggi - Incidències')

@section('content')
  
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px;">
        <h1>Tauler Principal Incidències </h1>
        <hr>
        <div class="col mb-4" style="background-color: #3F0052; padding:20px; border-radius: 10px; display: flex; justify-content: center; min-width: 400px;">
            <button type="submit" class="btn btn-info text-center" style="width: 23.5%; background-color: white; border-color: #2e153c; color: #2e153c;">Gestió Alertants</button>            
            <button type="submit" class="btn btn-info text-center" style="width: 23.5%; background-color: white; border-color: #2e153c; color: #2e153c;">Nova Incidència</button>            
            <button type="submit" class="btn btn-info text-center" style="width: 23.5%; background-color: white; border-color: #2e153c; color: #2e153c;">Històric Incidències</button>
            <button type="submit" class="btn btn-info text-center" style="width: 23.5%; background-color: white; border-color: #2e153c; color: #2e153c;">Gestió Recursos Mòbils</button>
        </div>
        <hr>
        <div class="col">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
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