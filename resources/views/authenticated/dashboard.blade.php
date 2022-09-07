<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo(a)!</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.admMenu')
    <div class="flex flex-col">
        @if (Auth::user()->ust_id===1)
            <h1 class="font-sans text-4xl text-center text-black font-bold my-5">Olá, aluno!</h1>
           <div class="">
               <img src="{{asset('images/sala.png')}}" alt="Sala de música" class="rounded-lg">
           </div>
        @else
           <div class="">
            <div class="my-5">
                <h1 class="font-sans text-4xl text-center text-black font-bold">Olá, professor!</h1>
            </div>
               <img src="{{asset('images/sala.png')}}" alt="Sala de música" class="w-full h-96">
           </div>
        @endif
        
    </div>
</body>
</html>