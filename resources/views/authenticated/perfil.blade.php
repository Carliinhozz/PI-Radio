<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    @include('layouts.admMenu')
    <div class="flex items-center shrink-0 justify-center mt-20">
        <div class="grid grid-cols-2 justify-center items-center shadow-xl w-96 rounded-xl p-8">
            <img src="{{asset('images/perfil.jpg')}}" alt="Perfil" class="w-32 rounded-full">
            <div class="flex flex-col">
                <h1 class="font-bold text-lg">{{Auth::user()->name}}</h1>
                <p class="text-sm font-mono">{{Auth::user()->email}}</p>
            </div>
        </div>
    </div>
</body>
</html>