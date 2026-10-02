<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col font-sans antialiased text-white"
      style="background: linear-gradient(135deg, #022c22, #064e3b, #065f46);">

  <header class="flex justify-between items-center px-8 py-6 max-w-6xl w-full mx-auto">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center text-amber-300 text-xl font-bold">$</div>
      <span class="text-xl font-bold">{{ config('app.name') }}</span>
    </div>

    <nav class="flex items-center gap-3">
      @auth
        <a href="{{ route('dashboard') }}" class="bg-amber-400 hover:bg-amber-300 text-emerald-950 font-semibold px-5 py-2 rounded-lg">
          Ir al panel
        </a>
      @else
        <a href="{{ route('login') }}" class="px-5 py-2 rounded-lg border border-white/30 hover:bg-white/10">Iniciar sesión</a>
        <a href="{{ route('register') }}" class="bg-amber-400 hover:bg-amber-300 text-emerald-950 font-semibold px-5 py-2 rounded-lg">
          Crear cuenta
        </a>
      @endauth
    </nav>
  </header>

  <main class="flex-1 flex items-center">
    <div class="max-w-6xl mx-auto px-8 py-16 text-center">
      <span class="inline-block bg-white/10 text-amber-300 text-sm font-semibold px-4 py-1 rounded-full mb-6">
        Gestión de personas e intereses
      </span>

      <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
        Organiza a tus personas<br>y sus intereses
      </h1>

      <p class="text-lg text-white/80 max-w-2xl mx-auto mb-10">
        Registra personas, asígnales intereses y lleva el control de todo desde un panel seguro.
      </p>

      <div class="flex justify-center gap-4">
        @auth
          <a href="{{ route('dashboard') }}" class="bg-amber-400 hover:bg-amber-300 text-emerald-950 font-semibold px-8 py-3 rounded-lg shadow-lg">
            Ir al panel
          </a>
        @else
          <a href="{{ route('register') }}" class="bg-amber-400 hover:bg-amber-300 text-emerald-950 font-semibold px-8 py-3 rounded-lg shadow-lg">
            Comenzar ahora
          </a>
          <a href="{{ route('login') }}" class="border border-white/30 hover:bg-white/10 font-semibold px-8 py-3 rounded-lg">
            Ya tengo cuenta
          </a>
        @endauth
      </div>

      <div class="grid md:grid-cols-3 gap-6 mt-20 text-left">
        <div class="bg-white/10 rounded-2xl p-6">
          <div class="text-3xl mb-3">👤</div>
          <h3 class="text-lg font-semibold mb-1">Personas</h3>
          <p class="text-white/70 text-sm">Registra personas con su nombre y correo electrónico.</p>
        </div>
        <div class="bg-white/10 rounded-2xl p-6">
          <div class="text-3xl mb-3">💰</div>
          <h3 class="text-lg font-semibold mb-1">Intereses</h3>
          <p class="text-white/70 text-sm">Crea intereses y asígnalos a cada persona.</p>
        </div>
        <div class="bg-white/10 rounded-2xl p-6">
          <div class="text-3xl mb-3">🔒</div>
          <h3 class="text-lg font-semibold mb-1">Seguridad</h3>
          <p class="text-white/70 text-sm">Acceso protegido con autenticación mediante Fortify.</p>
        </div>
      </div>
    </div>
  </main>

  <footer class="text-center text-white/60 text-sm py-6">
    © {{ date('Y') }} {{ config('app.name') }}
  </footer>
</body>
</html>