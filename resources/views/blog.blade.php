@extends("layouts.app")

@section('content')

<section class="py-10 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-6">Blog</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- ===== Colonne gauche : Articles ===== -->
      <div class="lg:col-span-2 space-y-10">
        <!-- Article vedette -->
        <article class="group rounded-2xl overflow-hidden bg-white shadow hover:shadow-xl transition">
          <a href="#" class="block">
            <div class="relative">
              <img src="https://images.unsplash.com/photo-1557800636-894a64c1696f?q=80&w=1400&auto=format&fit=crop"
                   alt="Cours en présentiel"
                   class="w-full aspect-[16/9] object-cover">
              <span class="absolute left-4 top-4 inline-flex items-center rounded-full bg-emerald-500 px-3 py-1 text-xs font-semibold text-black">
                Actualités
              </span>
            </div>
            <div class="p-5 md:p-6">
              <h2 class="text-xl md:text-2xl font-extrabold text-gray-900 group-hover:text-emerald-600 transition">
                L’Université s’apprête à reprendre l’apprentissage en personne
              </h2>
              <div class="mt-2 flex items-center gap-4 text-sm text-gray-500">
                <span class="inline-flex items-center gap-1">
                  <!-- calendar -->
                  <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M7 2h2v2h6V2h2v2h3a1 1 0 011 1v4H3V5a1 1 0 011-1h3V2zm-4 8h18v9a2 2 0 01-2 2H5a2 2 0 01-2-2v-9z"/></svg>
                  24 août 2022
                </span>
                <span class="inline-flex items-center gap-1">
                  <!-- user -->
                  <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M16 11a4 4 0 10-8 0 4 4 0 008 0zM4 20a8 8 0 1116 0H4z"/></svg>
                  Par RARE
                </span>
              </div>
              <p class="mt-3 text-gray-600">
                Des ressources de soins supplémentaires, une attention accrue en classe et un meilleur suivi. Voyons ce que cela change concrètement…
              </p>
              <div class="mt-5">
                <a href="#"
                   class="inline-flex items-center gap-2 rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-black hover:bg-emerald-400 active:bg-emerald-600 transition">
                  En savoir plus
                  <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg>
                </a>
              </div>
            </div>
          </a>
        </article>

        <!-- Grille d’articles secondaires -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- carte -->
          <article class="rounded-2xl overflow-hidden bg-white border border-gray-100 shadow-sm hover:shadow-md transition">
            <a href="#">
              <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=800&auto=format&fit=crop"
                   alt="" class="w-full aspect-video object-cover">
              <div class="p-4">
                <h3 class="font-bold text-gray-900 hover:text-emerald-600 transition">Séminaire : Apprendre à apprendre</h3>
                <p class="mt-2 text-sm text-gray-600">Méthodologie, prise de notes, révisions actives et plan d’étude.</p>
                <div class="mt-3 text-xs text-gray-500">23 août 2022</div>
              </div>
            </a>
          </article>

          <article class="rounded-2xl overflow-hidden bg-white border border-gray-100 shadow-sm hover:shadow-md transition">
            <a href="#">
              <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=800&auto=format&fit=crop"
                   alt="" class="w-full aspect-video object-cover">
              <div class="p-4">
                <h3 class="font-bold text-gray-900 hover:text-emerald-600 transition">Retour des évaluations en ligne</h3>
                <p class="mt-2 text-sm text-gray-600">Nouvelles règles, calendrier et conseils pour performer.</p>
                <div class="mt-3 text-xs text-gray-500">20 août 2022</div>
              </div>
            </a>
          </article>

          <article class="rounded-2xl overflow-hidden bg-white border border-gray-100 shadow-sm hover:shadow-md transition">
            <a href="#">
              <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?q=80&w=800&auto=format&fit=crop"
                   alt="" class="w-full aspect-video object-cover">
              <div class="p-4">
                <h3 class="font-bold text-gray-900 hover:text-emerald-600 transition">Se préparer aux oraux</h3>
                <p class="mt-2 text-sm text-gray-600">Structure, gestion du stress et communication claire.</p>
                <div class="mt-3 text-xs text-gray-500">18 août 2022</div>
              </div>
            </a>
          </article>

          <article class="rounded-2xl overflow-hidden bg-white border border-gray-100 shadow-sm hover:shadow-md transition">
            <a href="#">
              <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=800&auto=format&fit=crop"
                   alt="" class="w-full aspect-video object-cover">
              <div class="p-4">
                <h3 class="font-bold text-gray-900 hover:text-emerald-600 transition">Vie de campus : ce qui change</h3>
                <p class="mt-2 text-sm text-gray-600">Clubs, bibliothèques, horaires et nouveaux espaces.</p>
                <div class="mt-3 text-xs text-gray-500">15 août 2022</div>
              </div>
            </a>
          </article>
        </div>
      </div>

      <!-- ===== Colonne droite : Sidebar ===== -->
      <aside class="space-y-8">
        <!-- Recherche -->
        <div class="rounded-2xl border border-gray-100 p-4 shadow-sm">
          <form action="#" class="relative">
            <input type="text" placeholder="Rechercher …"
                   class="w-full rounded-lg border-gray-200 pr-10 focus:border-emerald-500 focus:ring-emerald-500">
            <button class="absolute right-2 top-1/2 -translate-y-1/2 text-emerald-600" aria-label="Rechercher">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M10 2a8 8 0 105.293 14.293l4.707 4.707-1.414 1.414-4.707-4.707A8 8 0 0010 2z"/></svg>
            </button>
          </form>
        </div>

        <!-- Evénement / article à la une (petit) -->
        <article class="rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
          <img src="https://images.unsplash.com/photo-1519455953755-af066f52f1ea?q=80&w=800&auto=format&fit=crop"
               alt="" class="w-full aspect-video object-cover">
          <div class="p-4">
            <h4 class="font-bold text-gray-900">Événement d’information sur l’histoire de l’art</h4>
            <p class="mt-2 text-sm text-gray-600">
              Conférence ouverte : contenus, intervenants et ateliers interactifs.
            </p>
            <a href="#" class="mt-2 inline-block text-emerald-600 text-sm font-semibold hover:underline">En savoir plus</a>
          </div>
        </article>

        <!-- Derniers articles -->
        <div class="rounded-2xl border border-gray-100 p-4 shadow-sm">
          <h5 class="font-bold text-gray-900 mb-3">Derniers articles</h5>
          <ul class="space-y-4">
            <li class="flex gap-3">
              <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=300&auto=format&fit=crop"
                   alt="" class="h-14 w-20 object-cover rounded">
              <div>
                <a href="#" class="block font-medium text-gray-900 hover:text-emerald-600">Processus de reprise des examens en ligne</a>
                <div class="text-xs text-gray-500 mt-1">23 août 2022</div>
              </div>
            </li>
            <li class="flex gap-3">
              <img src="https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?q=80&w=300&auto=format&fit=crop"
                   alt="" class="h-14 w-20 object-cover rounded">
              <div>
                <a href="#" class="block font-medium text-gray-900 hover:text-emerald-600">Créer des apprenants autonomes</a>
                <div class="text-xs text-gray-500 mt-1">20 août 2022</div>
              </div>
            </li>
            <li class="flex gap-3">
              <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=300&auto=format&fit=crop"
                   alt="" class="h-14 w-20 object-cover rounded">
              <div>
                <a href="#" class="block font-medium text-gray-900 hover:text-emerald-600">Ouvrir la porte : l’alphabétisation</a>
                <div class="text-xs text-gray-500 mt-1">18 août 2022</div>
              </div>
            </li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>

<nav class="mt-8" aria-label="Pagination">
  <ul class="flex items-center justify-center gap-1">
    <!-- Précédent -->
    <li>
      <a href="#"
         class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 text-sm font-medium text-gray-700 hover:bg-gray-50 aria-disabled:opacity-40 aria-disabled:pointer-events-none"
         aria-label="Page précédente">
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
      </a>
    </li>

    <!-- Numéros (cachés sur mobile) -->
    <li class="hidden md:block"><a href="#" class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 text-sm font-medium text-gray-700 hover:bg-gray-50">1</a></li>
    <li class="hidden md:block"><span class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg px-3 text-sm text-gray-500">…</span></li>
    <li class="hidden md:block"><a href="#" class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 text-sm font-medium text-gray-700 hover:bg-gray-50">7</a></li>
    <li class="hidden md:block"><a href="#" aria-current="page"
      class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-emerald-500 bg-emerald-500 px-3 text-sm font-semibold text-black">8</a></li>
    <li class="hidden md:block"><a href="#" class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 text-sm font-medium text-gray-700 hover:bg-gray-50">9</a></li>
    <li class="hidden md:block"><span class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg px-3 text-sm text-gray-500">…</span></li>
    <li class="hidden md:block"><a href="#" class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 text-sm font-medium text-gray-700 hover:bg-gray-50">15</a></li>

    <!-- Suivant -->
    <li>
      <a href="#"
         class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 text-sm font-medium text-gray-700 hover:bg-gray-50 aria-disabled:opacity-40 aria-disabled:pointer-events-none"
         aria-label="Page suivante">
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59 13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
      </a>
    </li>
  </ul>
</nav>


@endsection