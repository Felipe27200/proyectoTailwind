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
        {{-- Gracias a grid flow col organiza de forma automática las columnas en una fila --}}
        <div class="grid grid-flow-col">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>

        {{-- Si se le añade un número de filas, organiza las columnas de forma
            vertical en ellas, en este caso la primera columna iría de 1 a 3, la otra
            de 4 a 6 y la última de 6 a 9, por lo que tienen 3 filas * 3 columnas --}}
        <div class="grid grid-flow-col grid-rows-3 mt-6">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>

        {{-- Si se le define un número de columnas, la última columa queda vacía
            ya que el número de div no es suficiente para completarla --}}
        <div class="grid grid-flow-col grid-rows-3 grid-cols-4 mt-6">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div>
</body>
</html>