@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Editar Ingrediente</h1>

    @if ($errors->any())
        <div class="mb-4 text-sm text-red-600">
            <ul class="list-disc pl-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ingredients.update', $ingredient) }}" method="POST" 
          class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <!-- Nombre -->
        <div>
            <label for="nombre" class="block text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" 
                   value="{{ old('nombre', $ingredient->nombre) }}" required
                   class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
        </div>

        <!-- Tipo -->
        <div>
            <label for="tipo" class="block text-gray-700">Tipo</label>
            <select name="tipo" id="tipo" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
                <option value="alcohol" {{ old('tipo', $ingredient->tipo) == 'alcohol' ? 'selected' : '' }}>Alcohol</option>
                <option value="zumo" {{ old('tipo', $ingredient->tipo) == 'zumo' ? 'selected' : '' }}>Zumo</option>
                <option value="refresco" {{ old('tipo', $ingredient->tipo) == 'refresco' ? 'selected' : '' }}>Refresco</option>
                <option value="aderezo" {{ old('tipo', $ingredient->tipo) == 'aderezo' ? 'selected' : '' }}>Aderezo</option>
            </select>
        </div>

        <!-- Sabor -->
        <div>
            <label for="sabor" class="block text-gray-700">Sabor</label>
            <select name="sabor" id="sabor" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
                <option value="dulce" {{ old('sabor', $ingredient->sabor) == 'dulce' ? 'selected' : '' }}>Dulce</option>
                <option value="salado" {{ old('sabor', $ingredient->sabor) == 'salado' ? 'selected' : '' }}>Salado</option>
                <option value="amargo" {{ old('sabor', $ingredient->sabor) == 'amargo' ? 'selected' : '' }}>Amargo</option>
                <option value="picante" {{ old('sabor', $ingredient->sabor) == 'picante' ? 'selected' : '' }}>Picante</option>
                <option value="acido" {{ old('sabor', $ingredient->sabor) == 'acido' ? 'selected' : '' }}>Ácido</option>
                <option value="otro" {{ old('sabor', $ingredient->sabor) == 'otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <!-- Botones -->
        <div class="flex justify-end space-x-2">
            <a href="{{ route('ingredients.index') }}" 
               class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Volver</a>
            <button type="submit" 
               class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Guardar cambios</button>
        </div>
    </form>
@endsection
