@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title')
        Preguntas Frecuentes
        @stop
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/styles.css">

        <!-- Styles -->
        <style>
            html, body {
                
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                height: 100%;
                margin: 0;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div style="padding:20px 0px 100px;" class="container">
            <ul class="faq">
              <li class="quest"><h2>¿Se pueden retirar los productos en una sucursal?</h2><p style="display: none">Por el momento se entregan con envío.</p></li>
              <li class="quest"><h2>¿Realizan envíos al interior?</h2><p style="display: none">Realizamos envíos a todo el país.</p></li>
              <li class="quest"><h2>¿Se puede abonar en efectivo?</h2><p style="display: none">Ingresa a nuestra página de MercadoPago.</p></li>
              <li class="quest"><h2>¿Realizan reembolsos?</h2><p style="display: none">Si, únicamente durante el período de garantía</p></li>
              <li class="quest"><h2>¿Que hago si el producto que compré está fallado?</h2><p style="display: none">Comunicate inmediatamente con nosotros.</p></li>
            </ul>
          </div>
        <div class="content">



            </div>
        </div>
    </body>

    <script src="/js/faq.js"></script>

</html>
@endsection
