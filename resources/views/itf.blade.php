@extends("layouts.app")

@section('content')

<!-- ABOUT – Intellect Tronc SN Formation (ITF) -->
<section class="relative overflow-hidden bg-gradient-to-b from-emerald-50 via-white to-white">
  <!-- Halo décoratif -->
  <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-200/40 blur-3xl"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Hero -->
    <div class="grid grid-cols-1  gap-10 items-center">
      <div>
        <span class="inline-flex items-center rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-emerald-200">
          À propos d’ITF
        </span>
        <h1 class="mt-3 text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
          Un collectif d’excellence au service de votre réussite
        </h1>
        <p class="mt-3 text-gray-600 text-justify">
               
         <strong>Intellect Tronc SN Formation (ITF)</strong> est une équipe dynamique composée d’étudiants en
         <strong>Master 2, doctorants et docteurs</strong>          
          passionnés par la réussite académique. Nous accompagnons les étudiants de la Licence 1 et 2 en Sciences de la Nature à l'Université Nangui ABROGOUA afin de leur permettre de <strong> comprendre leurs cours en profondeur, renforcer leur confiance et atteindre l’excellence.</strong> Grâce à nos méthodes claires, nos TD guidés et nos ressources personnalisées, chaque étudiant dispose des outils nécessaires pour transformer son potentiel en véritable succès.
        </p>

      
    <!-- Mission + différenciants -->
    <div class="mt-16 grid grid-cols-1 lg:grid-cols-3 gap-6">
      <div class="lg:col-span-1 rounded-3xl bg-white p-6 shadow ring-1 ring-gray-100">
        <h2 class="text-xl font-bold text-gray-900">Notre mission</h2>
        <p class="mt-2 text-gray-600">
          <strong>Facilité la compréhension</strong> et transformer la motivation en résultats.
          Chez ITF, chaque séance est pensée pour être utile, concrète.
        </p>
      </div>
      <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="rounded-2xl bg-emerald-50 p-5 shadow-sm">
          <h3 class="font-semibold text-gray-900">Tutorat par pairs & experts</h3>
          <p class="mt-1 text-gray-600">Master 2, doctorants et docteurs à vos côtés pour des explications claires.</p>
        </div>
        <div class="rounded-2xl bg-sky-50 p-5 shadow-sm">
          <h3 class="font-semibold text-gray-900">Méthodo & révisions ciblées</h3>
          <p class="mt-1 text-gray-600">Fiches, quiz corrigés, TD/TP guidés pour gagner des points rapidement.</p>
        </div>
        <div class="rounded-2xl bg-indigo-50 p-5 shadow-sm">
          <h3 class="font-semibold text-gray-900">Suivi personnalisé</h3>
          <p class="mt-1 text-gray-600">Diagnostic de départ, plan d’étude, feedbacks réguliers.</p>
        </div>
        <div class="rounded-2xl bg-amber-50 p-5 shadow-sm">
          <h3 class="font-semibold text-gray-900">Horaires flexibles</h3>
          <p class="mt-1 text-gray-600">Présentiel / en ligne / week-end — selon votre emploi du temps.</p>
        </div>
      </div>
    </div>

    <!-- Approche en 4 étapes -->
    <div class="mt-16">
      <h2 class="text-xl font-bold text-gray-900 text-center">Notre approche pas à pas</h2>
      <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="rounded-2xl bg-white p-5 shadow ring-1 ring-gray-100">
          <div class="text-xs font-bold text-emerald-700">01</div>
          <h4 class="mt-1 font-semibold text-gray-900">Diagnostiquer</h4>
          <p class="mt-1 text-sm text-gray-600">On identifie vos blocages et vos objectifs.</p>
        </div>
        <div class="rounded-2xl bg-white p-5 shadow ring-1 ring-gray-100">
          <div class="text-xs font-bold text-emerald-700">02</div>
          <h4 class="mt-1 font-semibold text-gray-900">Expliquer</h4>
          <p class="mt-1 text-sm text-gray-600">Cours clarifiés avec exemples & analogies.</p>
        </div>
        <div class="rounded-2xl bg-white p-5 shadow ring-1 ring-gray-100">
          <div class="text-xs font-bold text-emerald-700">03</div>
          <h4 class="mt-1 font-semibold text-gray-900">Pratiquer</h4>
          <p class="mt-1 text-sm text-gray-600">TD/TP guidés, quiz, corrections pas à pas.</p>
        </div>
        <div class="rounded-2xl bg-white p-5 shadow ring-1 ring-gray-100">
          <div class="text-xs font-bold text-emerald-700">04</div>
          <h4 class="mt-1 font-semibold text-gray-900">Suivre</h4>
          <p class="mt-1 text-sm text-gray-600">Feedbacks, plan de révisions, préparation aux examens.</p>
        </div>
      </div>
    </div>

    <!-- Chiffres clés (placeholders à ajuster) -->
    <div class="mt-16 grid grid-cols-2 sm:grid-cols-4 gap-4">
      <div class="rounded-2xl bg-white p-5 shadow-sm text-center ring-1 ring-gray-100">
        <div class="text-2xl font-extrabold text-gray-900">+100</div>
        <div class="text-xs text-gray-500">Étudiants accompagnés</div>
      </div>
      <div class="rounded-2xl bg-white p-5 shadow-sm text-center ring-1 ring-gray-100">
        <div class="text-2xl font-extrabold text-gray-900">L1–L2</div>
        <div class="text-xs text-gray-500">Focus Sciences Nat.</div>
      </div>
      <div class="rounded-2xl bg-white p-5 shadow-sm text-center ring-1 ring-gray-100">
        <div class="text-2xl font-extrabold text-gray-900">+20</div>
        <div class="text-xs text-gray-500">Tuteurs M2 → Doctorat</div>
      </div>
      <div class="rounded-2xl bg-white p-5 shadow-sm text-center ring-1 ring-gray-100">
        <div class="text-2xl font-extrabold text-gray-900">Flexible</div>
        <div class="text-xs text-gray-500">Présentiel / En ligne</div>
      </div>
    </div>

    <!-- CTA bandeau -->
    <div class="mt-16 overflow-hidden rounded-3xl bg-gradient-to-r from-emerald-600 to-emerald-500 text-white">
      <div class="grid grid-cols-1 md:grid-cols-3">
        <img
          src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=900&q=70"
          alt="Étudiants motivés"
          class="h-48 w-full object-cover md:h-full md:rounded-l-3xl"
        />
        <div class="md:col-span-2 p-6 md:p-10">
          <h3 class="text-2xl font-extrabold">Prêt·e à réussir avec ITF ?</h3>
          <p class="mt-2 text-white/90">Rejoignez une communauté bienveillante et exigeante, guidée par des tuteurs expérimentés.</p>
          <div class="mt-5 flex flex-col sm:flex-row gap-3">
            <a href="#inscription"
               class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-semibold text-gray-900 shadow hover:bg-white/90 transition">
              S’inscrire maintenant
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59 13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
            </a>
            <a href="#contact"
               class="inline-flex items-center gap-2 rounded-xl ring-1 ring-white/50 px-5 py-3 text-sm font-semibold text-white hover:bg-white/10 transition">
              Parler à un conseiller
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection