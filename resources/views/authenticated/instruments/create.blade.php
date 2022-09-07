<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criar instrumentos</title>
    </head>
    <body>
        @include('layouts.admMenu')
        <div class="flex flex-col items-center shrink-0 justify-center bg-amber-50 shadow-xl mt-5 h-96 space-y-12">
            <div class="flex flex-col justify-center items-center w-2/6 h-52 space-y-5">
            <h1 class="font-sans text-4xl text-center text-green-700 font-bold col-span-2">Preencha os dados</h1>
                <form action="{{url('/instruments/create')}}" method="POST" class="grid grid-cols-2 justigy-center space-y-4">
                    @csrf
                    <input type="text" name="description" placeholder="Descrição" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200 col-span-2">
                    <p class="font-sans text-lg text-center text-green-700 font-bold">Modelo:</p>
                    <select name="model" id="" class="bg-white rounded-xl border-red">
                        @foreach($models as $model)
                            <option value="{{$model->id}}">{{$model->model}}</option>
                        @endforeach
                    </select>
                    <button class="rounded-full bg-orange-500 p-2 text-white texte-center font-bold hover:bg-orange-600 px-14 text-xl w-64 col-span-2">Adicionar</button>
                </form>
            </div>
            <a href="{{url('/instruments/models')}}" class="rounded-full bg-green-600 p-2 text-white font-bold hover:bg-green-800 px-14 text-xl grid col-span-2 justify-self-center w-2/6 text-center">Adicionar modelos</a>
        </div>

    </body>
</html>