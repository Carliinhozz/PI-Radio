<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="bg-gradient-to-l from-orange-500 to-yellow-300 lg:min-h-screen lg:flex lg:items-center p-8 sm:p-12 md:justify-center sm:justify-center">
            <div class="justify-center"><img src="{{asset('images/radio_logo.png')}}" alt="Logo Rádio Desopila" class="mb-5 rounded-lg">
            <p class="text-white text-base font-mono font-light text-center">Faça o seu login!</p>
        </div>
    </div>
    <div class="bg-yellow-50 lg:min-h-screen lg:flex flex-col lg:items-center p-8 sm:p-12 md:justify-center sm:justify-center">
            <div>
                <form action="{{url('login')}}" method="POST" class="flex flex-col space-y-8 justify-center items-center w-96 h-80 rounded-lg">
                    @csrf
                    <h1 class="text-5xl text-green-700 font-bold text-center">Faça seu login!</h1>
                    <input type="email" name="email" placeholder="Digite seu email" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200 focus:bg-orange-200 w-80">
                    <input type="password" name="password" placeholder="Digite sua senha" class="rounded-full bg-orange-300 p-1 text-black placeholder:text-red-900 text-center border-none hover:bg-orange-200  focus:bg-orange-200 w-80">
                    <button class="rounded-full bg-orange-500 p-2 text-white font-bold text-sm px-4 hover:bg-orange-600 w-64">Entrar</button>
                </form>
            </div>
        </div>
</body>
</html>