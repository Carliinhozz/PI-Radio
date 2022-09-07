<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Models</title>
</head>
<body>
    @include('layouts.admMenu')
    <div class="flex items-center shrink-0 justify-center bg-amber-50 shadow-xl mt-5 h-96 space-y-12">
        <form action="{{url('/instruments/models')}}" method="POST" class="flex flex-col space-y-5 items-center shrink-0 justify-center">
            @csrf
            <h1 class="font-sans text-4xl text-center text-green-700 font-bold">Selecione um modelo</h1>
            <input type="text" name="model" placeholder="Modelo" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200 p-3 w-64">
            <button class="rounded-full bg-orange-500 p-2 text-white font-bold hover:bg-orange-600 px-14 text-xl justify-self-center w-80">Criar</button>
        </form>
    </div>
</body>
</html>