<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>EjemploSeg - Registro</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6">Crear cuenta</h1>

    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full border rounded px-3 py-2">
        @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
      </div>

      <div class="mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full border rounded px-3 py-2">
        @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
      </div>

      <div class="mb-4">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required class="w-full border rounded px-3 py-2">
        @error('password') <p class="text-red-500">{{ $message }}</p> @enderror
      </div>

      <div class="mb-6">
        <label for="password_confirmation">Confirmar contraseña</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full border rounded px-3 py-2">
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Registrarme</button>
    </form>

    <p class="mt-4 text-sm">¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-blue-600">Inicia sesión</a></p>
  </div>
</body>
</html>