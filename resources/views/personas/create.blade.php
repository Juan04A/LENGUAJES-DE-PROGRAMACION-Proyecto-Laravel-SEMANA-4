@extends('layouts.plantilla')
@section('title', 'Crear Persona')

@section('content')
<div class="max-w-2xl">
  <div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Registrar persona</h1>
    <p class="text-gray-500 mt-1">Completa los datos y selecciona sus intereses.</p>
  </div>

  <div class="bg-white rounded-2xl shadow-md p-8">
    <form action="{{ route('personas.store') }}" method="POST" class="space-y-6">
      @csrf

      <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
               placeholder="Ej. María López"
               class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">
        @error('nombre') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required
               placeholder="maria@ejemplo.com"
               class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">
        @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <p class="text-sm font-medium text-gray-700 mb-2">Intereses</p>

        @if($intereses->isEmpty())
          <div class="rounded-lg border-2 border-dashed border-gray-200 p-6 text-center text-gray-500">
            Aún no hay intereses registrados.
            <a href="{{ route('intereses.create') }}" class="text-emerald-700 font-semibold hover:underline">Crea el primero</a>
          </div>
        @else
          <div class="flex flex-wrap gap-2">
            @foreach($intereses as $interes)
              <label class="cursor-pointer">
                <input type="checkbox" name="intereses[]" value="{{ $interes->id }}" class="peer sr-only"
                       @checked(in_array($interes->id, old('intereses', [])))>
                <span class="inline-block px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:border-emerald-500 peer-checked:bg-emerald-700 peer-checked:border-emerald-700 peer-checked:text-white">
                  {{ $interes->nombre }}
                </span>
              </label>
            @endforeach
          </div>
          <p class="text-xs text-gray-400 mt-2">Haz clic en un interés para seleccionarlo o quitarlo.</p>
        @endif
      </div>

      <div class="flex gap-3 pt-2">
        <button type="submit"
                class="bg-emerald-700 hover:bg-emerald-800 text-white font-semibold px-6 py-2.5 rounded-lg shadow-md">
          Guardar persona
        </button>
        <a href="{{ route('dashboard') }}"
           class="px-6 py-2.5 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50">
          Cancelar
        </a>
      </div>
    </form>
  </div>
</div>
@endsection