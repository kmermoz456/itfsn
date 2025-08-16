@extends('layouts.app')

@section('content')

<div x-data="{open:false}" class="min-h-screen bg-gray-50">
  <!-- Topbar -->
  <header class="sticky top-0 z-40 bg-white/80 backdrop-blur border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-14 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <button class="md:hidden p-2 rounded hover:bg-gray-100" @click="open=!open" aria-label="Menu">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        <a href="{{ route('admin.dashboard') }}" class="font-extrabold text-gray-900">ITF Admin</a>
      </div>
      <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button class="rounded-lg border px-3 py-1.5 text-sm hover:bg-gray-50">Déconnexion</button>
      </form>
    </div>
  </header>

  <!-- Wrapper -->
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-[240px_1fr] gap-6 px-4 sm:px-6 lg:px-8 py-6">
    <!-- Sidebar -->
    <aside :class="open ? 'block' : 'hidden md:block'">
      <nav class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 p-3 space-y-1">
        <a href="{{ route('admin.dashboard') }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">📊 Tableau de bord</a>
        <a href="{{ route('admin.posts.index') }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">📝 Articles</a>
        <a href="{{ route('admin.students.index') }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">🎓 Étudiants</a>
      </nav>
    </aside>

    <!-- Main -->
    <main class="space-y-6">
      @yield('admin')
    </main>
  </div>
</div>
@endsection
