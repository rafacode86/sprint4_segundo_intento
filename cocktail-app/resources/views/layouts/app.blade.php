<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>App de Cócteles</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Barra superior -->
    <nav class="bg-white shadow p-4 flex justify-between">
        <div>
            <a href="{{ route('cocktails.index') }}" 
               class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
               Cócteles
            </a>
            <a href="{{ route('ingredients.index') }}" 
               class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
               Ingredientes
            </a>
        </div>
        <div>
            @auth
                <span class="mr-4">Hola, {{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                        Salir
                    </button>
                </form>
            @endauth
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="max-w-4xl mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>
