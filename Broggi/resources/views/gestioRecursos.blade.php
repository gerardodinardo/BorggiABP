@extends('templates.plantilla')

@section('titulo', 'Broggi - Recursos Mòbils')

@section('content')

    <link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/backButton.css') }}" rel="stylesheet">
  <div id="mySidenav2" class="sidenav2">
    <a href="#" id="back">
        Torna a l'inici
        <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        </svg>
    </a>
  </div>
    
    <div class="container col-sm-10 mt-5">
        <div class="row">
          <div class="col-sm-7 border rounded">
            <p class="h2 mt-4">Recursos Mòbils</p>
            <hr>
            <table class="table table-striped table-bordered table-hover text-center">
                <thead class="table-dark">
                  <tr>
                    <th scope="col-sm">Tipus Recurs</th>
                    <th scope="col-sm">Direcció</th>
                    <th scope="col-sm">Descripció</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
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
            <p class="h2 mt-4 text-center">Recursos Existents</p>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Ambulancia Medicalitzada-Mike</h5>
                          <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, fuga voluptatem qui minima nostrum. quidem consequuntur placeat doloremque maiores tempora est esse atque sapiente optio commodi libero accusamus vel fugit.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Ambulancia Medicalitzada-India</h5>
                          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum voluptate aperiam dolorem ab accusantium maiores inventore, in dolore debitis architecto eius nihil totam, error laborum, alias dignissimos et incidunt corporis?</p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col mt-5">
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Ambulancia Medicalitzada-Tango</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, error voluptatum iusto exercitationem labore consequuntur tenetur necessitatibus odio soluta, fuga commodi laborum ipsa tempora minima iste architecto porro ducimus? Saepe.</p>
                        </div>
                    </div>
                </div>
                <div class="col mt-5">
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Helicopter Medicalitzat</h5>
                          <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt quasi necessitatibus, hic voluptas assumenda recusandae iure blanditiis, expedita labore, eius sed minus deleniti repellendus dignissimos accusamus harum consequatur ad officiis!</p>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection