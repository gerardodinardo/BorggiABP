@extends('templates.plantilla')

@section('titulo', 'Broggi - Contacte')

@section('content')
<link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
    <div id="mySidenav2" class="sidenav2">
        <a href="{{ asset('/principalIncidencies')}}" id="back">
            Torna a l'inici
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            </svg>
        </a>
    </div>
  
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom: 10%;">
        <h1 class="text-center" style="width: 100%; display: flex; position: center;">Hey! Som l'equip de programmadors...</h1>
        <hr>   
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_alessio.jfif') }}" style="display: flex; position: center; margin: 0 auto; margin-bottom: 15px;">
                <div class="container" style="background-color: #3F0052; border-radius: 10px; color: white; padding: 10px;">
                    <p><strong>Correu: </strong>alessiocrusella@gmail.com</p>
                    <p><strong>Especialitat:</strong> Hacer macarrones a las 4 de la mañana.</p>
                </div>
            </div>
            <div class="col-sm-6 text-center">                
                <img src="{{ asset('img/contacte_dan.jfif') }}" style="display: flex; position: center;margin: 0 auto; margin-bottom: 15px; ">
                <div class="container" style="background-color: #3F0052; border-radius: 10px; color: white; padding: 10px;">
                    <p><strong>Correu: </strong>dancezanne@gmail.com</p>
                    <p><strong>Especialitat:</strong> El Yoga modo diablo.</p>
                </div>
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_alex.jfif') }}" style="display: flex; position: center;margin: 0 auto;  margin-bottom: 15px; ">
                <div class="container" style="background-color: #3F0052; border-radius: 10px; color: white; padding: 10px;">
                    <p><strong>Correu: </strong>alexgarsanc@gmail.com</p>
                    <p><strong>Especialitat:</strong> Pensar durante horas.</p>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_jeratAnime.PNG') }}" style="display: flex; position: center;margin: 0 auto;  margin-bottom: 15px; width: 57%; ">
                <div class="container" style="background-color: #3F0052; border-radius: 10px; color: white; padding: 10px;">
                    <p><strong>Correu: </strong>gerardibz@gmail.com</p>
                    <p><strong>Especialitat:</strong> No dormir en días.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
    
