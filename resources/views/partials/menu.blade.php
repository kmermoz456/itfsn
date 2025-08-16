<!-- NAVBAR -->
<header class="sticky top-0 z-50 bg-white/70 backdrop-blur shadow-sm">
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <a href="{{ url('/') }}" class="flex items-center gap-2">
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
          <!-- Chaque lien a un état actif vert + soulignement -->
          <li>
            <a href="{{ url('/') }}"
               @class([
                 'group relative inline-flex items-center px-1 py-1.5 text-[15px] font-extrabold transition',
                 'text-emerald-600' => request()->is('/'),
                 'text-gray-900 hover:text-emerald-600' => !request()->is('/'),
               ])>
              Accueil
              <span @class([
                'absolute left-0 -bottom-1 h-0.5 rounded bg-emerald-500 transition-all',
                'w-full' => request()->is('/'),
                'w-0 group-hover:w-full' => !request()->is('/'),
              ])></span>
            </a>
          </li>

          <li>
            <a href="{{ route('cours') }}"
               @class([
                 'group relative inline-flex items-center px-1 py-1.5 text-[15px] font-extrabold transition',
                 'text-emerald-600' => request()->routeIs('cours'),
                 'text-gray-900 hover:text-emerald-600' => !request()->routeIs('cours'),
               ])>
              Nos Cours
              <span @class([
                'absolute left-0 -bottom-1 h-0.5 rounded bg-emerald-500 transition-all',
                'w-full' => request()->routeIs('cours'),
                'w-0 group-hover:w-full' => !request()->routeIs('cours'),
              ])></span>
            </a>
          </li>

          <li>
            <a href="{{ route('temoi') }}"
               @class([
                 'group relative inline-flex items-center px-1 py-1.5 text-[15px] font-extrabold transition',
                 'text-emerald-600' => request()->routeIs('temoi'),
                 'text-gray-900 hover:text-emerald-600' => !request()->routeIs('temoi'),
               ])>
              Témoignages
              <span @class([
                'absolute left-0 -bottom-1 h-0.5 rounded bg-emerald-500 transition-all',
                'w-full' => request()->routeIs('temoi'),
                'w-0 group-hover:w-full' => !request()->routeIs('temoi'),
              ])></span>
            </a>
          </li>

          <li>
            <a href="{{ route('blog.index') }}"
               @class([
                 'group relative inline-flex items-center px-1 py-1.5 text-[15px] font-extrabold transition',
                 'text-emerald-600' => request()->routeIs('blog.*'),
                 'text-gray-900 hover:text-emerald-600' => !request()->routeIs('blog.*'),
               ])>
              Actualités
              <span @class([
                'absolute left-0 -bottom-1 h-0.5 rounded bg-emerald-500 transition-all',
                'w-full' => request()->routeIs('blog.*'),
                'w-0 group-hover:w-full' => !request()->routeIs('blog.*'),
              ])></span>
            </a>
          </li>

          <li>
            <a href="{{ route('itf') }}"
               @class([
                 'group relative inline-flex items-center px-1 py-1.5 text-[15px] font-extrabold transition',
                 'text-emerald-600' => request()->routeIs('itf'),
                 'text-gray-900 hover:text-emerald-600' => !request()->routeIs('itf'),
               ])>
              À propos de nous
              <span @class([
                'absolute left-0 -bottom-1 h-0.5 rounded bg-emerald-500 transition-all',
                'w-full' => request()->routeIs('itf'),
                'w-0 group-hover:w-full' => !request()->routeIs('itf'),
              ])></span>
            </a>
          </li>

          <li>
            <a href="{{ route('contact') }}"
               @class([
                 'group relative inline-flex items-center px-1 py-1.5 text-[15px] font-extrabold transition',
                 'text-emerald-600' => request()->routeIs('contact'),
                 'text-gray-900 hover:text-emerald-600' => !request()->routeIs('contact'),
               ])>
              Contact
              <span @class([
                'absolute left-0 -bottom-1 h-0.5 rounded bg-emerald-500 transition-all',
                'w-full' => request()->routeIs('contact'),
                'w-0 group-hover:w-full' => !request()->routeIs('contact'),
              ])></span>
            </a>
          </li>
        </ul>

        <a href="{{ route('students.create') }}"
           class="inline-flex items-center rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-black shadow hover:bg-emerald-400 active:bg-emerald-600 transition">
          S'inscrire
        </a>
      </div>
    </div>

    <!-- Menu (mobile) -->
    <div id="nav-menu" class="md:hidden overflow-hidden max-h-0 transition-all duration-300 ease-out">
      <ul class="flex flex-col border-t border-gray-100 py-2">
        <li>
          <a href="{{ url('/') }}"
             @class([
               'mobile-link block px-4 py-2 rounded-lg',
               'text-emerald-700 bg-emerald-50 font-semibold' => request()->is('/'),
               'text-gray-900 hover:bg-gray-50' => !request()->is('/'),
             ])>Accueil</a>
        </li>
        <li>
          <a href="{{ route('cours') }}"
             @class([
               'mobile-link block px-4 py-2 rounded-lg',
               'text-emerald-700 bg-emerald-50 font-semibold' => request()->routeIs('cours'),
               'text-gray-900 hover:bg-gray-50' => !request()->routeIs('cours'),
             ])>Nos Cours</a>
        </li>
        <li>
          <a href="{{ route('temoi') }}"
             @class([
               'mobile-link block px-4 py-2 rounded-lg',
               'text-emerald-700 bg-emerald-50 font-semibold' => request()->routeIs('temoi'),
               'text-gray-900 hover:bg-gray-50' => !request()->routeIs('temoi'),
             ])>Témoignages</a>
        </li>
        <li>
          <a href="{{ route('blog.index') }}"
             @class([
               'mobile-link block px-4 py-2 rounded-lg',
               'text-emerald-700 bg-emerald-50 font-semibold' => request()->routeIs('blog.*'),
               'text-gray-900 hover:bg-gray-50' => !request()->routeIs('blog.*'),
             ])>Actualités</a>
        </li>
        <li>
          <a href="{{ route('itf') }}"
             @class([
               'mobile-link block px-4 py-2 rounded-lg',
               'text-emerald-700 bg-emerald-50 font-semibold' => request()->routeIs('itf'),
               'text-gray-900 hover:bg-gray-50' => !request()->routeIs('itf'),
             ])>À propos de nous</a>
        </li>
        <li>
          <a href="{{ route('contact') }}"
             @class([
               'mobile-link block px-4 py-2 rounded-lg',
               'text-emerald-700 bg-emerald-50 font-semibold' => request()->routeIs('contact'),
               'text-gray-900 hover:bg-gray-50' => !request()->routeIs('contact'),
             ])>Contact</a>
        </li>
      </ul>

      <div class="px-4 pb-3">
        <a href="{{ route('students.create') }}"
           class="block w-full text-center rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-black shadow hover:bg-emerald-400 active:bg-emerald-600 transition">
          S'inscrire
        </a>
      </div>
    </div>
  </nav>
</header>

