@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Ingredientes</h1>

    <a href="{{ route('ingredients.create') }}" 
       class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 mb-4 inline-block">
       Nuevo Ingrediente
    </a>

    <ul class="bg-white shadow rounded divide-y">
        @foreach($ingredients as $ing)
            <li class="p-2 flex justify-between">
                <span>{{ $ing->nombre }} ({{ $ing->tipo }} / {{ $ing->sabor }})</span>
                <div>
                    <a href="{{ route('ingredients.edit', $ing) }}" 
                       class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Editar</a>
                    <form action="{{ route('ingredients.destroy', $ing) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection