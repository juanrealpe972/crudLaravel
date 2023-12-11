<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    
</head>

<body class="w-full h-screen flex flex-col">
    <header class="flex items-center justify-between border-b p-5 bg-white shadow">
        @auth
            <nav class="flex gap-5 items-center">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="font-bold uppercase text-gray-600">Cerrar Sesión</button>
                </form>
            </nav>
        @endauth {{-- el auth sirve para autenticar si un usuario es valido  --}}
        @guest
            <nav class="flex gap-5 items-center">
                <p class="font-bold text-3xl text-cyan-900">Welcome</p>
            </nav>
        @endguest {{-- el guest sirve para autenticar si un usuario NO esta valido  --}}
        <h1 class="text-3xl font-bold text-cyan-900">REDDEV</h1>
    </header>
    <section class="container">
        @yield('contenido')
    </section>
</body>

</html>