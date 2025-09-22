<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>App de Cócteles</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">


    <nav class="bg-green-600 shadow p-4 flex justify-between items-center">
   
        <div class="flex space-x-4">
            <a href="{{ route('cocktails.index') }}" 
               class="px-4 py-2 bg-green-700 text-white rounded hover:bg-green-800 transition">
               Cócteles
            </a>
            <a href="{{ route('ingredients.index') }}" 
               class="px-4 py-2 bg-green-700 text-white rounded hover:bg-green-800 transition">
               Ingredientes
            </a>
        </div>

        <div class="flex items-center space-x-4">
            @auth
                <span class="text-white">Hola, {{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
                        Salir
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" 
                   class="px-4 py-2 bg-white text-green-700 rounded hover:bg-gray-100 transition">
                   Iniciar sesión
                </a>
                <a href="{{ route('register') }}" 
                   class="px-4 py-2 bg-white text-green-700 rounded hover:bg-gray-100 transition">
                   Registrarse
                </a>
            @endauth
        </div>
    </nav>

    <main class="max-w-6xl mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>

