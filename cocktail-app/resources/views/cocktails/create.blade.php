@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Nuevo Cóctel</h1>

    @if ($errors->any())
        <div class="mb-4 text-sm text-red-600">
            <ul class="list-disc pl-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cocktails.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf

        
        <div>
            <label for="nombre" class="block text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-blue-300">
        </div>

        
        <div>
            <label for="origen" class="block text-gray-700">Origen</label>
            <input type="text" name="origen" id="origen" value="{{ old('origen') }}"
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-blue-300">
        </div>

        
        <div>
            <label for="alcoholico" class="block text-gray-700">¿Contiene alcohol?</label>
            <select name="alcoholico" id="alcoholico" required
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-blue-300">
                <option value="1" {{ old('alcoholico') == '1' ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('alcoholico') == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>

        
        <div>
            <label for="ingredients" class="block text-gray-700">Ingredientes</label>
            <select name="ingredients[]" id="ingredients" multiple
                class="w-full mt-1 px-3 py-2 border rounded focus:ring focus:ring-blue-300">
                @foreach($ingredients as $ing)
                    <option value="{{ $ing->id }}">{{ $ing->nombre }} ({{ $ing->tipo }})</option>
                @endforeach
            </select>
            <p class="text-xs text-gray-500 mt-1">Usa Ctrl o Shift para seleccionar varios ingredientes.</p>
        </div>

        
        <div class="flex justify-end space-x-2">
            <a href="{{ route('cocktails.index') }}" 
               class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Cancelar</a>
            <button type="submit" 
               class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Guardar</button>
        </div>
    </form>
@endsection
