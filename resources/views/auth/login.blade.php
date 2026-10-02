@extends('layouts.guest')

@section('title', 'Iniciar sesión')
@section('subtitle', 'Bienvenido de nuevo')

@section('content')
  <h2 class="text-2xl font-bold text-gray-800 mb-6">Iniciar sesión</h2>

  <form action="{{ route('login') }}" method="POST" class="space-y-5">
    @csrf

    <div>
      <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
             placeholder="Ingresa tu correo"
             class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">
      @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
      <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
      <input type="password" name="password" id="password" required
             placeholder="Ingresa tu contraseña"
             class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 focus:outline-none">
    </div>

    <label class="flex items-center gap-2 text-sm text-gray-600">
      <input type="checkbox" name="remember" class="rounded">
      Recordarme
    </label>

    <button type="submit"
            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2.5 rounded-lg shadow-md">
      Entrar
    </button>
  </form>

  <p class="text-center text-sm text-gray-600 mt-6">
    ¿No tienes cuenta?
    <a href="{{ route('register') }}" class="text-emerald-600 font-semibold hover:underline">Regístrate</a>
  </p>
@endsection