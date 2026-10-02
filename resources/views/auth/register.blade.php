@extends('layouts.guest')

@section('title', 'Registro')
@section('subtitle', 'Crea tu cuenta para comenzar')

@section('content')
  <h2 class="text-2xl font-bold text-gray-800 mb-6">Crear cuenta</h2>

  <form action="{{ route('register') }}" method="POST" class="space-y-5">
    @csrf

    <div>
      <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus
             placeholder="Tu nombre"
             class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">
      @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
      <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}" required
             placeholder="tucorreo@ejemplo.com"
             class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">
      @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
      <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
      <input type="password" name="password" id="password" required
             placeholder="Mínimo 8 caracteres"
             class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">
      @error('password') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
      <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmar contraseña</label>
      <input type="password" name="password_confirmation" id="password_confirmation" required
             placeholder="Repite tu contraseña"
             class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">
    </div>

    <button type="submit"
            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2.5 rounded-lg shadow-md">
      Registrarme
    </button>
  </form>

  <p class="text-center text-sm text-gray-600 mt-6">
    ¿Ya tienes cuenta?
    <a href="{{ route('login') }}" class="text-emerald-600 font-semibold hover:underline">Inicia sesión</a>
  </p>
@endsection