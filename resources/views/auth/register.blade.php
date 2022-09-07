<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre-se</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    @vite('resources/css/app.css')
</head>
<body>
<div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="bg-gradient-to-l from-orange-500 to-yellow-300 lg:min-h-screen lg:flex lg:items-center p-8 sm:p-12 md:justify-center sm:justify-center">
            <div class="justify-center"><img src="{{asset('images/radio_logo.png')}}" alt="Logo Rádio Desopila" class="mb-5 rounded-lg">
            <p class="text-white text-base font-mono font-light text-center">Registre-se</p>
        </div>
    </div>
    <div class="bg-yellow-50 lg:min-h-screen lg:flex flex-col lg:items-center p-8 sm:p-12 md:justify-center sm:justify-center bg-yellow-50">
            <form action="{{url('register')}}" method="POST" class="grid grid-cols-2 grid-rows-3 justify-center items-center w-96 h-80 gap-y-10 gap-x-4">
                @csrf
                <!-- {{$errors}} -->
                <h1 class="font-sans text-5xl text-center text-green-700 font-bold col-span-2">Registre-se</h1>
                <input type="text" name="name" placeholder="Digite seu nome" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200">
                <input type="email" name="email" placeholder="Digite seu email" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200">
                <input type="password" name="password" placeholder="Digite sua senha" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200">
                <input type="password" name="password_confirmation" placeholder="Confirme sua senha" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200">
                <button class="rounded-full bg-orange-500 p-2 text-white font-bold hover:bg-orange-600 px-14 text-xl grid col-span-2 w-64 justify-self-center">Registrar-se</button>
            </form>
        </div>
</body>
</html>