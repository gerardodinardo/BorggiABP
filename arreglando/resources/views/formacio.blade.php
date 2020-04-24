@extends('templates.plantilla')

@section('titulo', 'Broggi - Formacio')

@section('content')
<link href="{{ asset('/css/formacio.css') }}" rel="stylesheet">
    <div id="mySidenav2" class="sidenav2">
        <a href="{{ asset('/')}}" id="back">
            Torna a l'inici
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            </svg>
        </a>
    </div>
  
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom: 10%;">
        <h1 class="text-center" style="width: 100%; display: flex; position: center;">Videos Formatius!</h1>
        <hr>  
        <div class="row text-center"> 
            <a href="" class="col-sm-6" data-toggle="modal" data-target="#modal_clip1">
                <div class="card mt-5">
                    <img class="card-img-top" src="{{ asset('img/clip1.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Caiguda per ACR (Aturada Cardiorespiratòria)</h4>
                    </div>
                </div>
            </a>
            <a href="" class="col-sm-6" data-toggle="modal" data-target="#modal_clip2">
                <div class="card mt-5">
                    <img class="card-img-top" src="{{ asset('img/clip2.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Consciència</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="row text-center"> 
            <a href="" class="col-sm-6" data-toggle="modal" data-target="#modal_clip3">
                <div class="card  mt-5">
                    <img class="card-img-top" src="{{ asset('img/clip3.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Valoració de la respiració</h4>
                    </div>
                </div>
            </a>
            <a href="" class="col-sm-6" data-toggle="modal" data-target="#modal_clip4">    
                <div class="card  mt-5">
                    <img class="card-img-top" src="{{ asset('img/clip4.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">RCP1 (compressions)</h4>
                    </div>
                </div>
            </a>    
        </div>   
        <div class="row text-center">
            <a href="" class="col-sm-6" data-toggle="modal" data-target="#modal_clip5">
                <div class="card  mt-5">
                    <img class="card-img-top" src="{{ asset('img/clip5.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">RCP4 (ventilacions)</h4>
                    </div>
                </div>
            </a>
            <a href="" class="col-sm-6" data-toggle="modal" data-target="#modal_clip6">
                <div class="card  mt-5">
                    <img class="card-img-top" src="{{ asset('img/clip6.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">RCP2 (compressions i ventilacions)</h4>
                    </div>
                </div>
            </a>    
        </div>  
        <a href="" data-toggle="modal" data-target="#modal_clip7">  
            <div class="card col-sm-12 mt-5">
                <img class="card-img-top" src="{{ asset('img/clip7.jpg') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">RCP6</h4>
                </div>
            </div>
        </a>    
        
    </div>

    {{-- MODALS --}}
    <div class="modal fade" id="modal_clip1" tabindex="-1" role="dialog" aria-labelledby="modal_clip1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Caiguda per ACR (Aturada Cardiorespiratòria)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <video width="100%" height="100%" autoplay controls muted>
                    <source src="{{ asset('videos/clip1.mp4') }}" type="video/mp4">
                </video>        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-custom1" data-dismiss="modal">Tancar</button>
            </div>
          </div>
        </div>
    </div>    
    {{-- MODALS --}}
    <div class="modal fade" id="modal_clip2" tabindex="-1" role="dialog" aria-labelledby="modal_clip2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Consciència</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <video width="100%" height="100%" autoplay controls muted>
                    <source src="{{ asset('videos/clip2.mp4') }}" type="video/mp4">
                </video>        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom1" data-dismiss="modal">Tancar</button>
            </div>
            </div>
        </div>
    </div>
    {{-- MODALS --}}
    <div class="modal fade" id="modal_clip3" tabindex="-1" role="dialog" aria-labelledby="modal_clip3" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Valoració de la respiració</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <video width="100%" height="100%" autoplay controls muted>
                    <source src="{{ asset('videos/clip3.mp4') }}" type="video/mp4">
                </video>        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-custom1" data-dismiss="modal">Tancar</button>
            </div>
          </div>
        </div>
    </div>      
    {{-- MODALS --}}
    <div class="modal fade" id="modal_clip4" tabindex="-1" role="dialog" aria-labelledby="modal_clip4" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">RCP1 (compressions)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <video width="100%" height="100%" autoplay controls muted>
                    <source src="{{ asset('videos/clip4.mp4') }}" type="video/mp4">
                </video>        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-custom1" data-dismiss="modal">Tancar</button>
            </div>
          </div>
        </div>
    </div> 
    {{-- MODALS --}}
    <div class="modal fade" id="modal_clip5" tabindex="-1" role="dialog" aria-labelledby="modal_clip5" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">RCP4 (ventilacions)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <video width="100%" height="100%" autoplay controls muted>
                    <source src="{{ asset('videos/clip5.mp4') }}" type="video/mp4">
                </video>        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-custom1" data-dismiss="modal">Tancar</button>
            </div>
          </div>
        </div>
    </div>       
    {{-- MODALS --}}
    <div class="modal fade" id="modal_clip6" tabindex="-1" role="dialog" aria-labelledby="modal_clip6" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">RCP2 (compressions i ventilacions)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <video width="100%" height="100%" autoplay controls muted>
                    <source src="{{ asset('videos/clip6.mp4') }}" type="video/mp4">
                </video>        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-custom1" data-dismiss="modal">Tancar</button>
            </div>
          </div>
        </div>
    </div>     
    {{-- MODALS --}}
    <div class="modal fade" id="modal_clip7" tabindex="-1" role="dialog" aria-labelledby="modal_clip7" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">RCP6</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <video width="100%" height="100%" autoplay controls muted>
                    <source src="{{ asset('videos/clip7.mp4') }}" type="video/mp4">
                </video>        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-custom1" data-dismiss="modal">Tancar</button>
            </div>
          </div>
        </div>
    </div>                    
@endsection
    
