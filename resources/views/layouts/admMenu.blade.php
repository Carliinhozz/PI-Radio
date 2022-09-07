<html>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    @vite('resources/css/app.css')
<body>
    <div class="bg-gradient-to-r from-orange-500 to-yellow-300 space-x-10 text-center flex justify-center items-center h-32">
        <div class="flex justify-self-start">
        <img src="{{asset('images/radio_logo.png')}}" alt="Logo Radio Desopila">
        </div>
        @if (Auth::user()->ust_id===2)
        <a href="{{url('instruments/create')}}" class="text-white font-bold">Adicionar instrumentos</a>
        <a href="{{url('/teacher/register')}}" class="text-white font-bold">Cadastrar professor</a>
            @include('layouts.menu')
        @else
            @include('layouts.menu')
        @endif
    </div>
</body>
</html>
