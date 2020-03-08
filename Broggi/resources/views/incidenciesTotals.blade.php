@extends('templates.plantilla')

@section('titulo', 'Broggi - Incidencies Totals')

@section('content')
  
    <div class="container col-sm-8 border">
        <div class="row">
            <div class="col">
                <h3 class="my-5 text-center">Incidencies obertes.</h3>
            </div>
        </div>
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
            <nav aria-label="Page navigation example">
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
              </nav>
        </div>             
    </div>

@endsection