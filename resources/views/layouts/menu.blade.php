<html>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    @vite('resources/css/app.css')

<body>
    <div class="space-x-10">
        <a href="{{url('borrow')}}" class="text-white font-bold">Empréstimo</a>
        <a href="{{url('perfil')}}" class="text-white font-bold">Perfil</a>
        <form action="{{url('logout')}}" method="POST" style="display: inline-block;">
        @csrf
        <button class="text-white font-bold">Sair</button>
        </form>
    </div>
</body>
</html>