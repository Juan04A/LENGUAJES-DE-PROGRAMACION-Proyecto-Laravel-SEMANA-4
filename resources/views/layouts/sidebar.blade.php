<aside class="w-64 bg-white border-r border-gray-200 min-h-screen">
  <div class="p-4">
    <a href="{{ route('dashboard') }}"
       class="flex items-center gap-3 px-4 py-2.5 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
      📊 Dashboard
    </a>

    <h3 class="text-gray-400 text-xs font-semibold uppercase tracking-wider mt-6 mb-2 px-4">
      Gestión
    </h3>
    <ul class="space-y-1">
      <li>
        <a href="{{ route('intereses.create') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-lg {{ request()->routeIs('intereses.*') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
          💰 Crear Interés
        </a>
      </li>
      <li>
        <a href="{{ route('personas.create') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-lg {{ request()->routeIs('personas.*') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
          👤 Crear Persona
        </a>
      </li>
    </ul>

    <h3 class="text-gray-400 text-xs font-semibold uppercase tracking-wider mt-6 mb-2 px-4">
      Seguridad
    </h3>
    <ul class="space-y-1">
      <li>
        <a href="{{ route('usuarios.index') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-lg {{ request()->routeIs('usuarios.*') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
          👥 Gestión de Usuarios
        </a>
      </li>
    </ul>
  </div>
</aside>