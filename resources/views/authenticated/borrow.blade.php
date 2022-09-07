<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimos</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.admMenu')
        <div class="grid grid-cols-2">
            <div class="flex flex-col items-center shrink-0 justify-center bg-amber-50 shadow-xl rounded-lg mt-5 h-96 space-y-12">
                <h1 class="text-green-700 font-bold text-3xl text-center mb-10">Selecione um modelo de instrumento:</h1>
                <form action="{{url('/borrow')}}" method="POST" class="flex space-x-5">
                    @csrf
                    <select name="model" id="" class="bg-white flex justify-self-center rounded-xl border-red">
                        @foreach($models as $model)
                            <option value="{{$model->id}}">{{$model->model}}</option>
                        @endforeach
                    </select>
                    <button class="rounded-full bg-orange-500 p-2 text-white font-bold hover:bg-orange-600 px-14 text-xl grid col-span-2 w-64 justify-self-center">Pesquisar</button>
                </form>
            </div>
            @if(isset($instruments))
            <div class="flex flex-col justify-center items-center bg-amber-100 rounded-lg mt-5">
                <form action="{{url('/confirm')}}">
                    @foreach($instruments as $inst)
                        <input type="hidden" value="{{$inst->id}}" name="instrument">
                        <p class="text-center text-black font-bold">Código: {{$inst->id}}</p>
                        <p class="text-center text-black font-bold">Descrição: {{$inst->description}}</p>
                        <button class="rounded-full bg-orange-500 p-2 text-white font-bold text-sm px-4 hover:bg-orange-600 w-64">Pegar</button>
                    @endforeach
                </form>
                        @endif
            </div>
        </div>
    </div>
</body>
</html>
