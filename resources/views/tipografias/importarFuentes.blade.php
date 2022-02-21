<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @include('layouts.header')

        <h1 class="text-center lg:text-left text-3xl font-bold">Este es un titulo</h1>
        
        <ul  class="list-decimal mb-5 list-inside">
            {{-- Para usar la fuente importada, se debe usar el prefijo font- seguido del alias que se le haya definido a esa fuente --}}
            <li class="font-roboto font-thin">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae illum, autem quos velit veritatis fugit maiores, molestias, fuga aut maxime saepe magnam mollitia earum a corporis ipsa assumenda consequatur commodi.</li>
            <li class="font-roboto font-medium">Assumenda reprehenderit voluptas accusantium et fugit a doloribus quidem ratione, atque corrupti eaque vel ipsum minima ducimus rem. Velit obcaecati veniam eveniet? Temporibus, distinctio mollitia eos dolorum nisi assumenda tempore!</li>
            <li class="font-roboto font-bold">Sequi dolor possimus totam, reiciendis nihil non illo veritatis quod, dignissimos iure magnam est ullam similique officiis commodi? Similique, error doloribus. Ut esse a voluptatibus aperiam nulla assumenda eius officiis.</li>
            <li class="font-roboto font-black">Dolore deleniti saepe hic nesciunt est consequatur, vitae distinctio. Quis impedit vero perferendis. Placeat repellendus totam ut inventore vero nemo eius rerum numquam. Ut qui asperiores minima! Dolor, voluptas cupiditate!</li>
        </ul>

        {{-- hover se usa para que cada vez que el cursor se posicione sobre el elemento este cambie su estilo --}}
        <p class="mb-5 text-red-500 hover:text-blue-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ad earum maiores animi, eaque accusantium? Cumque atque delectus ex! Placeat eum aspernatur nostrum eligendi possimus laudantium error delectus nesciunt. Nihil!</p>
    
        <ul class="md:list-disc list-decimal list-inside">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo veritatis expedita atque molestias corrupti alias dolorum omnis quisquam, ea voluptatem iusto suscipit ipsam facilis aperiam quasi quod? Nobis, ut eos!</li>
            <li>Ex aperiam provident quam, facilis et dolorem repudiandae quo at porro, minima repellendus tempora eius labore ab libero. Atque dolore consectetur libero commodi laboriosam recusandae sapiente eos reiciendis temporibus earum.</li>
            <li>Ducimus magnam, odit ipsa unde at tenetur quasi voluptatem necessitatibus mollitia architecto dolores libero, laborum voluptates fuga sapiente officia ea voluptatibus, expedita itaque pariatur maxime fugiat modi beatae. Tempore, excepturi!</li>
        </ul>
    </div>
</body>
</html>