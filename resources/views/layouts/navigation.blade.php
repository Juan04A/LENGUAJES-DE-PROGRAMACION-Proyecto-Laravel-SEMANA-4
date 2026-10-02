<nav class="bg-emerald-900 text-white px-8 py-4 flex justify-between items-center shadow-md">
  <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
    <span class="w-9 h-9 rounded-lg bg-white/15 flex items-center justify-center text-amber-300 font-bold">$</span>
    <span class="font-bold text-lg">{{ config('app.name') }}</span>
  </a>

  <div class="flex items-center gap-4">
    <div class="flex items-center gap-2">
      <span class="w-9 h-9 rounded-full bg-amber-400 text-emerald-950 flex items-center justify-center font-bold">
        {{ mb_strtoupper(mb_substr(Auth::user()->name, 0, 1)) }}
      </span>
      <span class="hidden sm:block">{{ Auth::user()->name }}</span>
    </div>

    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" class="text-sm bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg">
        Cerrar sesión
      </button>
    </form>
  </div>
</nav>