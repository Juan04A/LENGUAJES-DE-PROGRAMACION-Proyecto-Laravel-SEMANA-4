@extends('layouts.plantilla')
@section('title', 'Gestión de Usuarios')

@section('content')
  <div class="flex items-center justify-between mb-6">
    <div>
      <h1 class="text-3xl font-bold text-gray-800">Gestión de usuarios</h1>
      <p class="text-gray-500 mt-1">Usuarios registrados en el sistema.</p>
    </div>
    <span class="bg-emerald-100 text-emerald-800 text-sm font-semibold px-4 py-1.5 rounded-full">
      {{ $usuarios->count() }} {{ $usuarios->count() === 1 ? 'usuario' : 'usuarios' }}
    </span>
  </div>

  <div class="bg-white rounded-2xl shadow-md overflow-hidden">
    <div class="overflow-x-auto">
      <table class="min-w-full">
        <thead class="bg-emerald-900 text-white">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Usuario</th>
            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Registro</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          @forelse($usuarios as $usuario)
            <tr class="hover:bg-emerald-50">
              <td class="px-6 py-4 text-gray-500 text-sm">#{{ $usuario->id }}</td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-3">
                  <span class="w-9 h-9 rounded-full bg-amber-400 text-emerald-950 flex items-center justify-center font-bold text-sm">
                    {{ mb_strtoupper(mb_substr($usuario->name, 0, 1)) }}
                  </span>
                  <span class="font-medium text-gray-800">{{ $usuario->name }}</span>
                  @if($usuario->id == Auth::id())
                    <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold px-2 py-0.5 rounded-full">Tú</span>
                  @endif
                </div>
              </td>
              <td class="px-6 py-4 text-gray-600">{{ $usuario->email }}</td>
              <td class="px-6 py-4 text-gray-500 text-sm">{{ $usuario->created_at->format('d/m/Y H:i') }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="px-6 py-10 text-center text-gray-500">No hay usuarios registrados.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection