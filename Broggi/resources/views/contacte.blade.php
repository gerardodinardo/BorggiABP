@extends('templates.plantilla')

@section('titulo', 'Broggi - Contacte')

@section('content')<link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
  
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom: 10%;">
        <h1 class="text-center" style="width: 100%; display: flex; position: center;">Hey! Som l'equip de programmadors...</h1>
        <hr>   
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_alessio.jfif') }}" style="display: flex; position: center; margin: 0 auto; margin-bottom: 15px;">
                <div class="container" style="background-color: #3F0052; border-radius: 10px; color: white; padding: 10px;">
                    <p><strong>Correu: </strong>alessiocrusella@gmail.com</p>
                    <p><strong>Especialitat:</strong> Hacer macarrones a las 4 de la mañana.</p>
                    <p><strong>Conclusió:</strong>Si me hubiesen pagado no lo podría haber hecho mejor.</p>
                </div>
            </div>
            <div class="col-sm-6 text-center">                
                <img src="{{ asset('img/contacte_dan.jfif') }}" style="display: flex; position: center;margin: 0 auto; margin-bottom: 15px; ">
                <div class="container" style="background-color: #3F0052; border-radius: 10px; color: white; padding: 10px;">
                    <p><strong>Correu: </strong>dancezanne@gmail.com</p>
                    <p><strong>Especialitat:</strong> Crecí en la calle, cuidao.</p>
                    <p><strong>Conclusió:</strong> El lila es inhumano.</p>
                </div>
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_alex.jfif') }}" style="display: flex; position: center;margin: 0 auto;  margin-bottom: 15px; ">
                <div class="container" style="background-color: #3F0052; border-radius: 10px; color: white; padding: 10px;">
                    <p><strong>Correu: </strong>alexgarsanc@gmail.com</p>
                    <p><strong>Especialitat:</strong> Nose, que pondrías tú?</p>
                    <p><strong>Conclusió:</strong> ** Grillos **</p>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <img src="{{ asset('img/contacte_jerat.jfif') }}" style="display: flex; position: center;margin: 0 auto;  margin-bottom: 15px; ">
                <div class="container" style="background-color: #3F0052; border-radius: 10px; color: white; padding: 10px;">
                    <p><strong>Correu: </strong>gerardibz@gmail.com</p>
                    <p><strong>Especialitat:</strong> Shh, calla que me estoy viendo un episodio...</p>
                    <p><strong>Conclusió:</strong> El sistema educativo español, no funciona. Almenos ha quedado una web perfecta!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
    
