<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Tipografía Tailwind</title>
</head>
<body>
    <div class="container">
        @include('layouts.header')
        
        <h1 class="font-sans text-6xl md:text-3xl font-bold">Título de Prueba</h1>

        {{-- Leading es el interlineado entre las líneas de texto.
            El menos antes del ml siginifica un margin negativo --}}
        <p class="font-serif leading-normal mb-6 -ml-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt non animi ullam maxime modi, nisi temporibus nihil, molestiae adipisci optio nam tempore, explicabo distinctio aspernatur repudiandae. Rem perspiciatis voluptates placeat.</p>

        <ul class="font-mono text-sm italic">
            <li>Elemento #1</li>
            <li>Elemento #2</li>
            <li>Elemento #3</li>
        </ul>
    </div>
</body>
</html>