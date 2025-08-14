<!-- NAVBAR -->
<header class="sticky top-0 z-50 bg-white/70 backdrop-blur shadow-sm">
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <a href="/" class="flex items-center gap-2">
        <img src="{{ asset('img/icon.png') }}" alt="Logo" class="w-10 object-contain">
        <span class="sr-only">Accueil</span>
      </a>

      <!-- Burger (mobile) -->
      <button id="nav-toggle"
              class="md:hidden inline-flex items-center justify-center p-2 rounded text-gray-700 hover:bg-gray-100 focus:outline-none"
              aria-expanded="false" aria-controls="nav-menu" aria-label="Ouvrir le menu">
        <!-- icon open -->
        <svg id="icon-open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <!-- icon close -->
        <svg id="icon-close" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>

      <!-- Menu (desktop) -->
      <div class="hidden md:flex items-center gap-8">
        <ul class="flex items-center gap-6">
          <!-- Lien avec soulignement animé -->
          <li><a href="/" class="nav-link">Accueil</a></li>
          <li><a href="{{route('cours')}}" class="nav-link">Nos Cours</a></li>
          <li><a href="{{route('temoi')}}" class="nav-link">Témoignages</a></li>
          <li><a href="{{route('blog')}}" class="nav-link">Actualités</a></li>
          <li><a href="{{route('itf')}}" class="nav-link">À propos de nous</a></li>
          <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
        </ul>
        <a href="{{route('students.create')}}"
           class="inline-flex items-center rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-black shadow hover:bg-emerald-400 active:bg-emerald-600 transition">
          S'inscrire
        </a>
      </div>
    </div>

    <!-- Menu (mobile) -->
    <div id="nav-menu"
         class="md:hidden overflow-hidden max-h-0 transition-all duration-300 ease-out">
      <ul class="flex flex-col border-t border-gray-100 py-2">
        <li><a href="/" class="mobile-link">Accueil</a></li>
        <li><a href="{{route('cours')}}" class="mobile-link">Nos Cours</a></li>
         <li><a href="{{route('temoi')}}" class="mobile-link">Témoignages</a></li>
        <li><a href="{{route('blog')}}" class="mobile-link">Actualités</a></li>
        <li><a href="{{route('itf')}}" class="mobile-link">À propos de nous</a></li>
        <li><a href="{{route('contact')}}" class="mobile-link">Contact</a></li>
      </ul>
      <div class="px-4 pb-3">
        <a href="{{route('students.create')}}"
           class="block w-full text-center rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-black shadow hover:bg-emerald-400 active:bg-emerald-600 transition">
          S'inscrire
        </a>
      </div>
    </div>
  </nav>
</header>




