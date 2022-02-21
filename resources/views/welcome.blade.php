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
        {{-- con grid rows, se le indica el número de filas que tendrá
            en este caso se definen 2 --}}
        <div class="grid grid-rows-2 grid-cols-4 gap-4">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            {{-- Así se le indica que esta columna ocupará 2 filas, si no carga, puede ser por la cache del sitio --}}
            <div class="bg-blue-400 col-span-2 row-span-2">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-700">E</div>
        </div>


    </div>
</body>
</html>