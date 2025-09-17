<x-guest-layout>
    <h1 class="text-2xl font-bold mb-6 text-center">Iniciar sesión</h1>

    <!-- Mensajes de validación -->
    @if ($errors->any())
        <div class="mb-4 text-sm text-red-600">
            <ul class="list-disc pl-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Correo electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Contraseña</label>
            <input id="password" type="password" name="password" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <!-- Recordarme -->
        <div class="flex items-center mb-4">
            <input id="remember_me" type="checkbox" name="remember"
                class="mr-2 rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500">
            <label for="remember_me" class="text-sm text-gray-600">Recordarme</label>
        </div>

        <!-- Botón de login -->
        <div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                Iniciar sesión
            </button>
        </div>
    </form>

    <!-- Enlace a registro -->
    <div class="mt-6 text-center">
        <p class="text-gray-600 text-sm">
            ¿No tienes cuenta?
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">
                Regístrate aquí
            </a>
        </p>
    </div>
</x-guest-layout>
