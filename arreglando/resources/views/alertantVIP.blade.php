@extends('templates.plantilla')

@section('titulo', 'Broggi - Alertant VIP')

@section('content')
<link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
    <div id="mySidenav2" class="sidenav2">
        <a href="{{ asset('/gestioAlertants')}}" id="back">
            Torna a l'inici
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            </svg>
        </a>
    </div>
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom: 10%;">
        <h3 class="text-center" style="width: 100%; display: flex; position: center;">Alertants VIP</h1>
        <hr>
        <div class="d-flex justify-content-center">

        {{-- BUSCADOR--}}
            <form action="{{ action('AlertantController@indexAlertantsVIP') }}" method="get" class="form-inline">
         
                <div class="form-group mb-2">
                    <label for="" class="sr-only">Alertant VIP a cercar:</label>
                    <input type="text" readonly class="form-control-plaintext" id="" value="Centre Sanitari a cercar: ">
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                    <label for="search" class="sr-only">Nom VIP</label>
                    <input type="text" class="form-control" id="search" name="search" placeholder="Nom centre">
                  </div>
                  <button type="submit" class="btn btn-custom1 btn-xl mb-2">CERCAR</button>
            </form>


        </div>
        <div class="d-flex flex-wrap justify-content-center  row no-gutters">
        @foreach ($alertants as $alertant)
            @if($alertant->tipus_alertant_id == 4)
                <div class="card ml-3  mt-3 mb-5  col-sm-3">
                    <div class="card-header bg-warning text-center">
                        {{ $alertant->nom }}&nbsp;&nbsp;
                        <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Adreça: </strong>{{ $alertant->adreca }}</p>
                        <p class="card-text"><strong>Tlf: </strong>{{ $alertant->telefon }}</p>
                        {{-- <p class="card-text"><strong>Comarca: </strong>{{ $alertant->municipi->comarca->nom }}</p> --}}
                        <p class="card-text"><strong>Municipi: </strong>{{ $alertant->municipi->nom }}</p>
                    </div>
                    {{-- <div class="card-footer text-muted">
                        Footer
                    </div> --}}
                </div>
            @else 
            @endif
        @endforeach
        
        </div>   
        {{-- {{ $alertants->links() }} --}}
        {{$alertants->appends(['search'=>$search])->links()}}
    </div>
@endsection
    