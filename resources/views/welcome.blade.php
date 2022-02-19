<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Ruta para obtener los estilos de tailwind --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Tailwind</title>
</head>
<body>
    <div class="container">
        {{-- Se divide el contenido en 4 columnas --}}
        <div class="grid grid-cols-4 gap-x-4">
            {{-- Definir un color de fondo --}}
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">C</div>
            <div class="bg-blue-700">D</div>

        </div>
    </div>
</body>
</html>