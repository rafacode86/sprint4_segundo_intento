@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Cócteles</h1>

    <a href="{{ route('cocktails.create') }}" 
       class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 mb-4 inline-block">
       Nuevo Cóctel
    </a>

    <ul class="bg-white shadow rounded divide-y">
        @foreach($cocktails as $c)
            <li class="p-2 flex justify-between">
                <div>
                    <strong>{{ $c->nombre }}</strong> 
                    <span class="text-gray-500">({{ $c->origen }})</span>
                    <br>
                    <small>Alcohol: {{ $c->alcoholico ? 'Sí' : 'No' }}</small>
                    <br>
                    <small>Ingredientes: {{ $c->ingredients->pluck('nombre')->join(', ') }}</small>
                </div>
                <div>
                    <a href="{{ route('cocktails.edit', $c) }}" 
                       class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Editar</a>
                    <form action="{{ route('cocktails.destroy', $c) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
