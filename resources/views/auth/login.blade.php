<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>EjemploSeg - Iniciar sesión</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6">Iniciar sesión</h1>

    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus class="w-full border rounded px-3 py-2">
        @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
      </div>

      <div class="mb-4">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required class="w-full border rounded px-3 py-2">
      </div>

      <div class="mb-6">
        <label><input type="checkbox" name="remember"> Recordarme</label>
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Entrar</button>
    </form>

    <p class="mt-4 text-sm">¿No tienes cuenta? <a href="{{ route('register') }}" class="text-blue-600">Regístrate</a></p>
  </div>
</body>
</html>