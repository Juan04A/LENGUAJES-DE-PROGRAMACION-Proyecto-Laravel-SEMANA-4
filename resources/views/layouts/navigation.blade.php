<nav class="bg-white shadow px-8 py-4 flex justify-between items-center">
  <a href="{{ route('dashboard') }}" class="font-bold text-lg">EjemploSeg</a>

  <div class="flex items-center gap-4">
    <span class="text-gray-600">{{ Auth::user()->name }}</span>
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" class="text-red-600 hover:underline">Cerrar sesión</button>
    </form>
  </div>
</nav>