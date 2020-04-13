@extends('templates.plantilla')

@section('titulo', 'Broggi - Contacte')

@section('content')<link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
  
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px;">
        <h1>¿Qui Som?</h1>
        <hr>   
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_alessio.jfif') }}" style="display: flex; position: center; margin: 0 auto;">
                usandae consequatur voluptate praesentium quos reprehenderit distinctio possimus.
            </div>
            <div class="col-sm-6 text-center">                
                <img src="{{ asset('img/contacte_dan.jfif') }}" style="display: flex; position: center; margin-bottom: 15px; margin: 0 auto;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ab culpa, fugiat tempora non quo soluta, qui eius possimus et sunt nobis. Recusandae consequatur voluptate praesentium quos reprehenderit distinctio possimus.
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col-sm-6 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ab culpa, fugiat tempora non quo soluta, qui eius possimus et sunt nobis. Recusandae consequatur voluptate praesentium quos reprehenderit distinctio possimus.
            </div>
            <div class="col-sm-6 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ab culpa, fugiat tempora non quo soluta, qui eius possimus et sunt nobis. Recusandae consequatur voluptate praesentium quos reprehenderit distinctio possimus.
            </div>
        </div> 
    </div>

@endsection
    
