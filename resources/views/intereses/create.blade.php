@extends('layouts.plantilla')
@section('title', 'Crear Interés')

@section('content')
<div class="max-w-2xl">
  <div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Registrar interés</h1>
    <p class="text-gray-500 mt-1">Agrega un nuevo interés para asignarlo a las personas.</p>
  </div>

  <div class="bg-white rounded-2xl shadow-md p-8">
    <form action="{{ route('intereses.store') }}" method="POST" class="space-y-6">
      @csrf

      <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre del interés</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
               placeholder="Ej. Inversiones"
               class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">
        @error('nombre') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">
          Descripción <span class="text-gray-400 font-normal">(opcional)</span>
        </label>
        <textarea name="descripcion" id="descripcion" rows="4"
                  placeholder="Describe brevemente este interés..."
                  class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">{{ old('descripcion') }}</textarea>
      </div>

      <div class="flex gap-3 pt-2">
        <button type="submit"
                class="bg-emerald-700 hover:bg-emerald-800 text-white font-semibold px-6 py-2.5 rounded-lg shadow-md">
          Guardar interés
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