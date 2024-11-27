<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!--Si se necesita un servicio diferente a vite se necesita construir los archivos necesarios para el servidor con npm run build-->
    </head>
    <body class="font-sans antialiased">
        @session('message')
            <div class="success-message">
                {{ session('message') }}
            </div>
        @endsession
        {{ $slot }}
    </body>
</html>
