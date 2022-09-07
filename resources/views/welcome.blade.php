<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rádio Desopila</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="bg-gradient-to-r from-orange-500 to-yellow-300 lg:min-h-screen lg:flex lg:items-center p-8 sm:p-12 md:justify-center sm:justify-center">
            <div class="justify-center"><img src="{{asset('images/radio_logo.png')}}" alt="Logo Rádio Desopila" class="mb-5 rounded-lg">
            <p class="text-white text-base font-mono font-light">Uma produção do Campus Caicó/RN</p>
        </div>
        </div>
        <div class="bg-yellow-50 flex lg:flex-col justify-center lg:items-center p-8 sm:p-12">
        <h1 class="text-center text-5xl font-bold text-green-700">Entre e faça os seus agendamentos</h1>
            <div class="flex flex-col justify-center items-center space-y-10 w-96 h-80 rounded">
                <a href="{{url('login')}}" class="rounded-full bg-orange-500 p-30 text-white text-center font-bold p-2 font-bold hover:bg-orange-600 w-80 px-14 text-xl shadow-xl">Login</a>
                <a href="{{url('register')}}" class="rounded-full bg-orange-500 p-30 text-white text-center font-bold p-2 font-bold hover:bg-orange-600 px-9 w-80 text-xl shadow-xl">Registrar-se</a>
            </div>
        </div>
    </div>
</body>
</html>