<x-guest-layout>
    <h1 class="text-2xl font-bold mb-6 text-center">Crear cuenta</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nombre</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Correo electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Contraseña</label>
            <input id="password" type="password" name="password" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
        </div>

        <!-- Confirmación -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
        </div>

        <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
            Registrarse
        </button>
    </form>

    <div class="mt-6 text-center">
        <p class="text-sm text-gray-600">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Inicia sesión</a>
        </p>
    </div>
</x-guest-layout>

