<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} - @yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center p-4 font-sans antialiased"
      style="background: linear-gradient(135deg, #022c22, #064e3b, #065f46);">

  <div class="w-full max-w-md">
    <div class="text-center mb-8">
      <a href="{{ url('/') }}" class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-white/15 text-amber-300 text-3xl font-bold shadow-lg mb-4">
        $
      </a>
      <h1 class="text-3xl font-bold text-white">{{ config('app.name') }}</h1>
      <p class="text-white/70 mt-1">@yield('subtitle')</p>
    </div>

    <div class="bg-white rounded-2xl shadow-2xl p-8">
      @yield('content')
    </div>

    <p class="text-center text-white/60 text-sm mt-6">
      © {{ date('Y') }} {{ config('app.name') }}
    </p>
  </div>
</body>
</html>