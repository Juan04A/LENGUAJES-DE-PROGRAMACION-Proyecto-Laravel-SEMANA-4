@extends('layouts.plantilla')
@section('title', 'Dashboard')

@section('content')
  <div class="rounded-2xl p-8 text-white shadow-lg mb-8"
       style="background: linear-gradient(135deg, #022c22, #064e3b, #065f46);">
    <p class="text-amber-300 text-sm font-semibold">{{ now()->format('d/m/Y') }}</p>
    <h1 class="text-3xl font-bold mt-1">¡Bienvenido, {{ Auth::user()->name }}!</h1>
    <p class="text-white/70 mt-2">Panel de control de {{ config('app.name') }}</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md">
      <div class="flex items-center justify-between">
        <p class="text-gray-500 text-sm font-medium">Personas</p>
        <span class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center text-xl">👤</span>
      </div>
      <p class="text-4xl font-bold text-gray-800 mt-4">{{ $totalPersonas }}</p>
      <a href="{{ route('personas.create') }}" class="inline-block text-sm text-emerald-700 font-semibold mt-4 hover:underline">
        + Registrar persona
      </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md">
      <div class="flex items-center justify-between">
        <p class="text-gray-500 text-sm font-medium">Intereses</p>
        <span class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center text-xl">💰</span>
      </div>
      <p class="text-4xl font-bold text-gray-800 mt-4">{{ $totalIntereses }}</p>
      <a href="{{ route('intereses.create') }}" class="inline-block text-sm text-emerald-700 font-semibold mt-4 hover:underline">
        + Registrar interés
      </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md">
      <div class="flex items-center justify-between">
        <p class="text-gray-500 text-sm font-medium">Usuarios</p>
        <span class="w-10 h-10 rounded-xl bg-sky-50 flex items-center justify-center text-xl">👥</span>
      </div>
      <p class="text-4xl font-bold text-gray-800 mt-4">{{ $totalUsuarios }}</p>
      <a href="{{ route('usuarios.index') }}" class="inline-block text-sm text-emerald-700 font-semibold mt-4 hover:underline">
        Ver usuarios →
      </a>
    </div>
  </div>
@endsection