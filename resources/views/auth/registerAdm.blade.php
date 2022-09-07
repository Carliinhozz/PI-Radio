
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.admMenu')
    <div class="flex items-center shrink-0 justify-center mt-10 shrink-0 justify-center bg-amber-50 shadow-xl mt-5 h-96 space-y-8">
        <form action="{{url('/teacher/register')}}" method="POST" class="grid grid-cols-2 grid-rows-3 justify-center items-center w-96 h-80 gap-y-10 gap-x-4">
            @csrf
            <h1 class="font-sans text-4xl text-center text-green-700 font-bold col-span-2">Preencha os dados</h1>
            <input type="text" name="name" placeholder="Digite seu nome" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200">
            <input type="email" name="email" placeholder="Digite seu email" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200">
            <input type="password" name="password" placeholder="Digite sua senha" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200">
            <input type="password" name="password_confirmation" placeholder="Confirme sua senha" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200">
            <button class="rounded-full bg-orange-500 p-2 text-white font-bold hover:bg-orange-600 px-14 text-xl grid col-span-2 w-64 justify-self-center">Registrar</button>
        </form>
    </div>
</body>
</html>