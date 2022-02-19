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
        <div class="grid grid-cols-4 gap-4">
            {{-- La clase span permite definir cuántas columnas abarcará una
                sola columna, adicionalmente se le puede definir un breakpoint
                para ajustar la expansión a la pantalla --}}
            {{-- <div class="bg-blue-200 sm:col-span-2 md:col-span-3 lg:col-span-4 col-start-2">A</div> --}}
            {{-- start le indica que empieze a partir de la columna en la posición 2 --}}
            <div class="bg-blue-200 col-span-2 col-start-2">A</div>
            <div class="bg-blue-300 col-start-1">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">C</div>
            <div class="bg-blue-700">D</div>
        </div>


    </div>
</body>
</html>