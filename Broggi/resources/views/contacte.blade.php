@extends('templates.plantilla')

@section('titulo', 'Broggi - Contacte')

@section('content')<link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
  
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px;">
        <h1 class="text-center" style="width: 100%; display: flex; position: center;">¿Qui s'ha passat la quarentena programant?</h1>
        <hr>   
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_alessio.jfif') }}" style="display: flex; position: center; margin: 0 auto; margin-bottom: 15px; ">
                <p><strong>Correu: </strong>alessiocrusella@gmail.com</p>
            </div>
            <div class="col-sm-6 text-center">                
                <img src="{{ asset('img/contacte_dan.jfif') }}" style="display: flex; position: center;margin: 0 auto; margin-bottom: 15px; ">
                <p><strong>Correu: </strong>gerardibz@gmail.com</p>
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_alex.jfif') }}" style="display: flex; position: center;margin: 0 auto;  margin-bottom: 15px; ">
                <p><strong>Correu: </strong>alexgarsanc@gmail.com</p>
            </div>
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_jerat.PNG') }}" style="display: flex; position: center;margin: 0 auto;  margin-bottom: 15px; ">
                <p><strong>Correu: </strong>gerardibz@gmail.com</p>
            </div>
        </div> 
    </div>

@endsection
    
