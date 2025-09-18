@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Nuevo Ingrediente</h1>

    @if ($errors->any())
        <div class="mb-4 text-sm text-red-600">
            <ul class="list-disc pl-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ingredients.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf

        
        <div>
            <label for="nombre" class="block text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
        </div>

       
        <div>
            <label for="tipo" class="block text-gray-700">Tipo</label>
            <select name="tipo" id="tipo" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
                <option value="">Selecciona...</option>
                <option value="alcohol">Alcohol</option>
                <option value="zumo">Zumo</option>
                <option value="refresco">Refresco</option>
                <option value="aderezo">Aderezo</option>
            </select>
        </div>

        
        <div>
            <label for="sabor" class="block text-gray-700">Sabor</label>
            <select name="sabor" id="sabor" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-green-300">
                <option value="">Selecciona...</option>
                <option value="dulce">Dulce</option>
                <option value="salado">Salado</option>
                <option value="amargo">Amargo</option>
                <option value="picante">Picante</option>
                <option value="acido">Ácido</option>
                <option value="otro">Otro</option>
            </select>
        </div>

        
        <div class="flex justify-end space-x-2">
            <a href="{{ route('ingredients.index') }}" 
               class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Cancelar</a>
            <button type="submit" 
               class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Guardar</button>
        </div>
    </form>
@endsection
