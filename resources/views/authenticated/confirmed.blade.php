<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
</head>
<body>
    @include('layouts.admMenu')
    <div class="flex flex-col items-center shrink-0 justify-center bg-amber-50 shadow-xl mt-5 h-96 space-y-8">
        @foreach($instrument as $inst)
            <h1 class="text-center text-xl text-black font-bold">Instrumento: {{$inst->id}}</h1>
            <h1 class="text-center text-lg text-black font-bold">Descrição: {{$inst->description}}</h1>
            <form action="{{url('/confirm')}}" method="POST" class="grid grid-col justify-center items-center">
                @csrf
                <input type="hidden" value="{{$inst->id}}" name="ins_id" >
                <input type="hidden" value="{{Auth::user()->id}}" name="usr_id">
                <button class="rounded-full bg-orange-500 p-2 text-white text-center text-lg font-bold text-sm px-4 hover:bg-orange-600 w-96">Confirmar</button>
            </form>
        @endforeach
    </div>

</body>
</html>