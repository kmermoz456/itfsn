<footer class="relative overflow-hidden bg-gray-950 text-gray-300">
  {{-- Décors flous --}}
  <div aria-hidden="true" class="pointer-events-none absolute -top-24 -left-24 h-72 w-72 rounded-full bg-emerald-500/10 blur-3xl"></div>
  <div aria-hidden="true" class="pointer-events-none absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-cyan-500/10 blur-3xl"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

      {{-- 1) Marque + présentation --}}
      <div>
        <div class="flex items-center gap-3">
          <img src="{{ asset('img/icon.png') }}" alt="Logo ITF" class="h-10 w-10 rounded-md bg-white/5 p-1 ring-1 ring-white/10">
          <h2 class="text-xl font-extrabold text-white">Intellect Tronc SN Formation</h2>
        </div>
        <p class="mt-4 leading-relaxed text-gray-400">
          Centre de formation spécialisé dans le renforcement des connaissances en
          <span class="text-emerald-300">Sciences Naturelles</span>. Nous aidons les étudiants à réussir leurs études universitaires.
        </p>

        <a href="{{ route('students.create') }}"
           class="mt-5 inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-4 py-2 text-sm font-semibold text-black shadow hover:bg-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-400">
          S’inscrire
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M13 5l7 7-7 7v-4H4v-6h9V5z"/></svg>
        </a>
      </div>

      {{-- 2) Liens utiles --}}
      <nav aria-label="Liens utiles">
        <h3 class="text-sm font-semibold tracking-wider text-gray-200">Liens utiles</h3>
        <ul class="mt-4 space-y-2">
          <li><a href="{{ url('/') }}" class="group inline-flex items-center gap-2 hover:text-white">
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-400/70 group-hover:bg-emerald-400"></span> Accueil
          </a></li>
          <li><a href="{{ route('cours') }}" class="group inline-flex items-center gap-2 hover:text-white">
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-400/70 group-hover:bg-emerald-400"></span> Nos Cours
          </a></li>
          <li><a href="{{ route('temoi') }}" class="group inline-flex items-center gap-2 hover:text-white">
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-400/70 group-hover:bg-emerald-400"></span> Témoignages
          </a></li>
          <li><a href="{{ route('blog.index') }}" class="group inline-flex items-center gap-2 hover:text-white">
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-400/70 group-hover:bg-emerald-400"></span> Actualités
          </a></li>
          <li><a href="{{ route('itf') }}" class="group inline-flex items-center gap-2 hover:text-white">
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-400/70 group-hover:bg-emerald-400"></span> À propos de nous
          </a></li>
          <li><a href="{{ route('contact') }}" class="group inline-flex items-center gap-2 hover:text-white">
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-400/70 group-hover:bg-emerald-400"></span> Contact
          </a></li>
        </ul>
      </nav>

      {{-- 3) Contact --}}
      <div>
        <h3 class="text-sm font-semibold tracking-wider text-gray-200">Nous contacter</h3>
        <ul class="mt-4 space-y-3 text-gray-400">
          <li class="flex items-start gap-3">
            <svg class="mt-0.5 h-5 w-5 text-emerald-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8 2 5 5 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-4-3-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
            <span>
              École primaire DIA Kouakou, près de l’Université Nangui Abrogoua, <br> Abidjan – Côte d’Ivoire
            </span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-0.5 h-5 w-5 text-emerald-400" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.464 15.464 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V21a1 1 0 01-1 1C10.07 22 2 13.93 2 3a1 1 0 011-1h3.49a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
            <span class="space-y-1">
              <a href="tel:+2250747491072" class="hover:text-white">+225 07 47 49 10 72</a><br>
              <a href="tel:+2250767517286" class="hover:text-white">+225 07 67 51 72 86</a><br>
              <a href="tel:+2250787124476" class="hover:text-white">+225 07 87 12 44 76</a>
            </span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-0.5 h-5 w-5 text-emerald-400" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4a2 2 0 00-2 2v.4l10 6.25L22 6.4V6a2 2 0 00-2-2zm0 4.85l-8 5-8-5V18a2 2 0 002 2h12a2 2 0 002-2V8.85z"/></svg>
            <a href="mailto:contact@troncsnformation.ci" class="hover:text-white">contact@troncsnformation.ci</a>
          </li>
        </ul>
      </div>

      {{-- 4) Réseaux sociaux / WhatsApp --}}
      <div>
        <h3 class="text-sm font-semibold tracking-wider text-gray-200">Suivez-nous</h3>
        <div class="mt-4 flex flex-wrap items-center gap-3">
          <a href="#" class="inline-flex items-center gap-2 rounded-lg border border-white/10 bg-white/5 px-3 py-2 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-emerald-400">
            {{-- Facebook --}}
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.16 1.8.16v2h-1c-1 0-1.3.63-1.3 1.28V12h2.2l-.35 3h-1.85v7A10 10 0 0022 12z"/></svg>
            <span>Facebook</span>
          </a>
          <a href="https://www.tiktok.com/@itfuna?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener"
             class="inline-flex items-center gap-2 rounded-lg border border-white/10 bg-white/5 px-3 py-2 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-emerald-400">
            {{-- TikTok --}}
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2c.7 0 1.4.1 2 .3a5.8 5.8 0 004.4 4.4c.2.7.3 1.3.3 2-2.1 0-4.1-.8-5.7-2v7.4a5.7 5.7 0 11-3.9-5.4v2.4a3.3 3.3 0 102.3 3.1V2z"/></svg>
            <span>TikTok</span>
          </a>
          <a href="https://chat.whatsapp.com/DStI9zHPEyRIMYWRBELLR2?mode=ac_t" target="_blank" rel="noopener"
             class="inline-flex items-center gap-2 rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-3 py-2 text-emerald-300 hover:text-emerald-200 hover:bg-emerald-500/15 focus:outline-none focus:ring-2 focus:ring-emerald-400">
            {{-- WhatsApp --}}
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 3.5A11 11 0 003.2 18.9L2 22l3.2-1.2A11 11 0 1020.5 3.5zM12 20a8 8 0 01-4-1.1l-.3-.2-2.4.9.8-2.4-.2-.3A8 8 0 1112 20zm4.6-5.5c-.2-.1-1.2-.6-1.4-.7s-.3-.1-.5.1-.6.7-.8.8-.3.2-.5.1a6.6 6.6 0 01-1.9-1.2 7 7 0 01-1.3-1.6c-.1-.2 0-.3.1-.5l.4-.5.2-.3c.1-.2 0-.3 0-.4l-.7-1.6c-.2-.4-.3-.4-.5-.4h-.4l-.4.1c-.2.1-.6.6-.6 1.5s.6 1.7.7 1.8a9.8 9.8 0 003.6 3.6c.4.2 1.5.6 2.1.7.3 0 .5 0 .7-.1.2-.1 1.2-.5 1.4-1.1.2-.6.2-1 .1-1.1 0-.2-.2-.2-.4-.3z"/></svg>
            <span>WhatsApp</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Barre du bas --}}
  <div class="border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col md:flex-row items-center justify-between gap-3">
      <p class="text-xs text-gray-400">
        © {{ date('Y') }} Intellect Tronc SN Formation — Tous droits réservés.
      </p>
      <div class="flex items-center gap-4 text-xs">
        <a href="{{ route('admin.login.form') }}" class="hover:text-white">Gestion</a>
        <span class="text-white/20">•</span>
        <a href="{{ route('contact') }}" class="hover:text-white">Support</a>
        <span class="text-white/20">•</span>
        <a href="#top" class="inline-flex items-center gap-1 hover:text-white">
          <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 5l6 6h-4v8h-4v-8H6z"/></svg> Haut de page
        </a>
      </div>
    </div>
  </div>
</footer>
