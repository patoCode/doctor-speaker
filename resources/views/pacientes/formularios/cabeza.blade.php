@extends('default')
@section('content')
    <h1>Area: cabeza</h1>
    <pre>
        <?php
            print_r($dolores);
        ?>
    </pre>
    {!! Form::open(['url' => 'diagnostico/store']) !!}        
        @foreach($dolores as $dolor)  
            {!! Form::label('$dolor[0]')!!}
            {!! Form::checkbox('Adormecimiento', 'SI')!!}
        @endforeach
        {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
    <script>
        function callUrl(palabra){
            window.location.href = "/consulta/"+palabra;            
        }
        if (annyang) {
            // Definimos nuestro primer comando. Primero escribimos el comando y posteriormente la función a ejecutar.
            var commandos = {
                'cabeza': function() {
                    console.log('hablaste!!')
                    var value = $("[name='DOLOR']");
                    $(value).prop('checked', true);
                },
                'tronco': function() {                    
                    console.log('hablaste!!')
                    var value = $("[name='Adormecimiento']");
                    $(value).prop('checked', true);
                },
                'mano': function() {
                    console.log('hablaste!!')
                },
                'guardar': function() {                    
                    console.log('Guardando')
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