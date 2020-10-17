@extends('default')
@section('content')
    <div class="row">
        <ul>
            <li><a href="#">Cabeza</a></li>
            <li><a href="#">Cuello</a></li>
            <li><a href="#">Hombros</a></li>
            <li><a href="#">Manos</a></li>
        </ul> 
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
    <script>
        function callUrl(palabra){
            window.location.href = "/consulta/"+palabra;            
        }
        if (annyang) {
            // Definimos nuestro primer comando. Primero escribimos el comando y posteriormente la función a ejecutar.
            var commandos = {
                'cabeza': function() {
                    callUrl('cabeza')
                },
                'tronco': function() {                    
                    callUrl('tronco')
                },
                'mano': function() {
                    callUrl('mano')
                },
                'hombro': function() {                    
                    callUrl('hombro')
                }
            };

            // Agregamos nuestros comandos a annyang.
            annyang.addCommands(commandos);

            //Establecemos el lenguaje, en mi caso es español de México (puedes ver la lista completa de lenguajes soportados aquí).
            annyang.setLanguage("es-MX");

            // Empezmaos a escuchar.
            annyang.start();
        }
    </script>
@endsection