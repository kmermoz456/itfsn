@extends("layouts.app")

@section('content')

<section id="hero" class="relative isolate overflow-hidden">
  <!-- Slides -->
  <div class="absolute inset-0 -z-10">
    <!-- Slide 1 -->
    <div data-hero-slide
         class="absolute inset-0 bg-cover bg-center opacity-100 transition-opacity duration-700 ease-in-out"
         style="background-image:url('https://itfuna.test/img/img.jpg');"></div>
    <!-- Slide 2 -->
    <div data-hero-slide
         class="absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-700 ease-in-out"
         style="background-image:url('https://itfuna.test/img/img2.jpg');"></div>
    <!-- Slide 3 -->
    <div data-hero-slide
         class="absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-700 ease-in-out"
         style="background-image:url('https://itfuna.test/img/img3.jpg');"></div>
  </div>

  <!-- Voile sombre -->
  <div class="absolute inset-0 -z-10 bg-black/50"></div>

  <!-- Contenu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
    <div class="max-w-2xl text-white">
      <span class="inline-flex items-center rounded-full bg-green-300/20 px-3 py-1 text-xs font-semibold text-green-300 ring-1 ring-inset ring-green-400/30">
        Inscriptions Ouvertes
      </span>

      <h1 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight">
        Rejoignez <span class="text-green-300">Intellect Tronc SN Formation</span>
      </h1>

      <p class="mt-4 text-base sm:text-lg text-white font-bold">
        Nouveaux bacheliers, préparez-vous à réussir dès la Licence 1 avec nos cours de renforcement en Sciences Naturelles.  
        Méthodes efficaces, encadrement personnalisé et suivi continu pour exceller dès le premier semestre.
      </p>

      <!-- CTA -->
      <div class="mt-8 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
        <a href="{{route('students.create')}}"
           class="inline-flex justify-center items-center rounded-md bg-green-300 px-5 py-3 text-sm font-semibold text-black hover:bg-green-400 active:bg-green-600 transition">
          S’inscrire maintenant
          <svg class="ml-2 h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
          </svg>
        </a>

        <a href="https://chat.whatsapp.com/DStI9zHPEyRIMYWRBELLR2?mode=ac_t"
           class="inline-flex justify-center items-center rounded-md bg-white/10 px-5 py-3 text-sm font-semibold text-white ring-1 ring-white/30 hover:bg-white/20 transition">
          Rejoignez notre groupe WhatsApp
        </a>
      </div>

          
    </div>
  </div>

  <!-- Indicateurs -->
  <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
    <button data-hero-dot aria-label="Slide 1" class="h-2.5 w-2.5 rounded-full bg-white/70"></button>
    <button data-hero-dot aria-label="Slide 2" class="h-2.5 w-2.5 rounded-full bg-white/40"></button>
    <button data-hero-dot aria-label="Slide 3" class="h-2.5 w-2.5 rounded-full bg-white/40"></button>
  </div>
</section>


<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Titre -->
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
        Pourquoi choisir <span class="text-green-600">Intellect Tronc SN Formation</span> ?
      </h2>
      <p class="mt-3 text-gray-600">
        Nouveaux bacheliers, donnez-vous toutes les chances de réussir votre Licence 1 avec notre accompagnement complet.
      </p>
    </div>

    <!-- Cartes -->
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Carte 1 -->
      <div class="rounded-2xl p-6 bg-blue-600 text-white shadow-lg hover:shadow-2xl transition hover:-translate-y-1">
        <div class="h-10 w-10 rounded-lg bg-white/20 flex items-center justify-center mb-4">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 3L1 8l11 5 9-4.09V17h2V8L12 3zM5 13v3c0 1.66 3.58 3 8 3s8-1.34 8-3v-3l-8 3-8-3z"/>
          </svg>
        </div>

        <h3 class="text-6xl font-semibold">10 ans</h3>
        <p class="mt-2 text-white/90">
        Depuis plus d’une décennie, nous aidons les étudiants en sciences de la nature à réussir brillamment leurs études. Une expérience solide qui fait toute la différence.
        </p>
        
      </div>

      <!-- Carte 2 -->
      <div class="rounded-2xl p-6 bg-rose-600 text-white shadow-lg hover:shadow-2xl transition hover:-translate-y-1">
        <div class="h-10 w-10 rounded-lg bg-white/20 flex items-center justify-center mb-4">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M16 11c1.66 0 3-1.79 3-4s-1.34-4-3-4-3 1.79-3 4 1.34 4 3 4zM8 11c1.66 0 3-1.79 3-4S9.66 3 8 3 5 4.79 5 7s1.34 4 3 4zm0 2c-2.67 0-8 1.34-8 4v2h10v-2c0-1.86.87-3.41 2.22-4.5C11.05 12.77 9.55 13 8 13zm8 0c-1.54 0-3.05.23-4.22.5C13.13 14.59 14 16.14 14 18v2h10v-2c0-2.66-5.33-4-8-4z"/>
          </svg>
        </div>
        <h3 class="text-lg font-semibold">Notre mission est simple</h3>
        <p class="mt-1 text-white/90">
    Nous voulons vous aider à atteindre vos objectifs académiques en vous fournissant les outils, 
    les ressources et le soutien nécessaires pour réussir.
    </p>
        
      </div>

      <!-- Carte 3 -->
      <div class="rounded-2xl p-6 bg-purple-700 text-white shadow-lg hover:shadow-2xl transition hover:-translate-y-1">
        <div class="h-10 w-10 rounded-lg bg-white/20 flex items-center justify-center mb-4">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M18 2H6a2 2 0 00-2 2v16a1 1 0 001.447.894L8 20.118l2.553.776A1 1 0 0012 20V6h8V4a2 2 0 00-2-2zM12 6v14l-2-.607L8 20V6h4z"/>
          </svg>
        </div>
        <h3 class="text-lg font-semibold">Des cours sur mesure</h3>
        <p class="mt-1 text-white/90">
    Cours personnalisés selon vos besoins : consolider vos bases ou relever des défis avancés. Encadrement par des enseignants qualifiés, du master au doctorat 3, motivés pour votre réussite.
    </p>
      </div>

      <!-- Carte 4 -->
      <div class="rounded-2xl p-6 bg-emerald-600 text-white shadow-lg hover:shadow-2xl transition hover:-translate-y-1">
        <div class="h-10 w-10 rounded-lg bg-white/20 flex items-center justify-center mb-4">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M7 2h2v2h6V2h2v2h3a1 1 0 011 1v4H3V5a1 1 0 011-1h3V2zm-4 8h18v9a2 2 0 01-2 2H5a2 2 0 01-2-2v-9z"/>
          </svg>
        </div>
        <h3 class="text-lg font-semibold">Un suivi vers l’excellence</h3>
        <p class="mt-2 text-white/90">
    Résumés clairs, évaluations régulières et examens blancs pour mesurer vos progrès. Devoirs mensuels et suivi continu vous préparent à briller aux examens de chaque semestre.     
    </p>
      </div>
    </div>

    <!-- CTA -->
   
  </div>
</section>



<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- En-tête -->
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Nos principaux services</h2>
      <p class="mt-3 text-gray-600">
        Résoudre des problèmes critiques grâce à une éducation de qualité et un accompagnement sur-mesure.
      </p>
    </div>

    <!-- Contenu -->
    <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <!-- Colonne gauche : services -->
      <div class="space-y-6">
        <!-- Item -->
        <div class="flex items-start gap-4 rounded-2xl bg-indigo-50/70 p-5 shadow-sm hover:shadow-md transition">
          <div class="shrink-0 h-12 w-12 rounded-xl bg-indigo-600 text-white flex items-center justify-center">
            <!-- icône: trend -->
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h2v14h16v2H3V3zm16 2l-5.5 6-3-3L6 16h14V5z"/></svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-900">Cours de renforcement personnalisés</h3>
            <p class="mt-1 text-gray-600">
        Programmes adaptés à chaque étudiant, selon son niveau et ses besoins
         : consolidation des bases, préparation aux examens.  
        </p>
          </div>
        </div>

        <!-- Item -->
        <div class="flex items-start gap-4 rounded-2xl bg-sky-50 p-5 shadow-sm hover:shadow-md transition">
          <div class="shrink-0 h-12 w-12 rounded-xl bg-sky-600 text-white flex items-center justify-center">
            <!-- icône: smile -->
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm-3 7a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm6 0a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM7.5 14a5.5 5.5 0 009 0H7.5z"/></svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-900">Évaluations continues</h3>
            <p class="mt-1 text-gray-600">
              Interrogations écrites, devoirs mensuels et examens blancs pour mesurer les progrès et améliorer les performances.
            </p>
          </div>
        </div>

        <!-- Item -->
        <div class="flex items-start gap-4 rounded-2xl bg-emerald-50 p-5 shadow-sm hover:shadow-md transition">
          <div class="shrink-0 h-12 w-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center">
            <!-- icône: ticket/offer -->
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M3 5a2 2 0 012-2h6v4a2 2 0 104 0V3h2a2 2 0 012 2v4a2 2 0 100 4v4a2 2 0 01-2 2h-6v-4a2 2 0 10-4 0v4H5a2 2 0 01-2-2V13a2 2 0 100-4V5z"/></svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-900">Résumés de cours clairs et accessibles</h3>
            <p class="mt-1 text-gray-600">
              Supports pédagogiques simples et précis pour faciliter la compréhension et la mémorisation des notions clés.
            </p>
          </div>
        </div>

        <!-- CTA -->
        <div class="pt-2">
          <a href="{{route('students.create')}}"
             class="inline-flex items-center gap-2 rounded-xl bg-green-300 px-5 py-3 text-sm font-semibold text-black shadow hover:bg-green-400 active:bg-green-600 transition">
            S’inscrire maintenant
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg>
          </a>
        </div>
      </div>

      <!-- Colonne droite : image avec blob -->
      <div class="relative">
        <!-- Blob derrière -->
        <div class="absolute -inset-4 sm:-inset-6 rounded-[2rem] bg-amber-200/60 blur-0 sm:blur-[2px] -z-10 rotate-3"></div>

        <!-- Image -->
        <img
          src="https://itfuna.test/img/img4.png"
          alt="Étudiante en bibliothèque"
          class="w-full max-w-md lg:max-w-lg mx-auto rounded-3xl shadow-xl object-cover"
        />
      </div>
    </div>
  </div>
</section>










@endsection