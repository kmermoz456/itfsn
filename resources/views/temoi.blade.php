@extends("layouts.app")

@section('content')

<!-- SECTION : Titre -->
<section class="bg-gray-50 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900">L'histoire de nos étudiants</h2>
  </div>
</section>

<!-- SECTION : Grille de témoignages -->
<section class="py-10 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <!-- icône guillemets -->
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
          « Intellect Tronc SN m’a donné la méthode et la confiance pour réussir ma L1. Les TD guidés m’ont sauvé ! »
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=11" alt="">
          <div>
            <p class="font-semibold text-gray-900">Roger Saint</p>
            <p class="text-xs text-gray-500">Ancien : promo 2022</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
          « J’ai trouvé une vraie communauté. On révise ensemble, on s’entraide, et les profs sont accessibles. »
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=32" alt="">
          <div>
            <p class="font-semibold text-gray-900">Jean Ado</p>
            <p class="text-xs text-gray-500">Licence 1, Sciences Nat.</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
          « Les quiz corrigés et les fiches m’ont permis de gagner des points dès les premiers contrôles. »
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=20" alt="">
          <div>
            <p class="font-semibold text-gray-900">Aïcha Koné</p>
            <p class="text-xs text-gray-500">Admise avec mention</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
          « Les horaires flexibles m’ont permis de travailler à côté sans rater l’essentiel. Organisation au top. »
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=5" alt="">
          <div>
            <p class="font-semibold text-gray-900">Marius S.</p>
            <p class="text-xs text-gray-500">Étudiant salarié</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
          « Les TD/TP sont guidés et concrets. J’ai enfin compris la démarche scientifique et comment réviser efficacement. »
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=7" alt="">
          <div>
            <p class="font-semibold text-gray-900">N’goran B.</p>
            <p class="text-xs text-gray-500">Licence 1, promo 2023</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
          « Mentorat, fiches, examens blancs : tout est réuni pour réussir sereinement la L1. »
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=15" alt="">
          <div>
            <p class="font-semibold text-gray-900">Léa Mélodi</p>
            <p class="text-xs text-gray-500">Ancienne : promo 2020</p>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- SECTION : Bandeau CTA -->
<section class="py-10 bg-transparent">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-indigo-600 to-blue-600 text-white">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
        <!-- Image -->
        <div class="md:col-span-1">
          <img
            src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=640&q=70"
            alt="Étudiante motivée"
            class="h-full w-full object-cover md:rounded-l-3xl"
          />
        </div>
        <!-- Texte + CTA -->
        <div class="md:col-span-2 p-6 md:p-10">
          <h3 class="text-2xl font-extrabold">Façonnez votre avenir dès aujourd’hui !</h3>
          <p class="mt-2 text-white/90">
            L’éducation est l’arme la plus puissante pour changer le monde. Devenez un leader avec une méthode claire et un accompagnement bienveillant.
          </p>
          <div class="mt-5">
            <a href="#inscription"
               class="inline-flex items-center gap-2 rounded-xl bg-amber-400 px-5 py-3 text-sm font-semibold text-gray-900 shadow hover:bg-amber-300 active:bg-amber-500 transition">
              Apprendre encore plus
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg>
            </a>
          </div>
        </div>
      </div>
      <!-- Ombre douce sous la carte -->
      <div class="pointer-events-none absolute inset-x-0 -bottom-6 h-6 rounded-b-3xl bg-black/0 shadow-[0_20px_40px_-20px_rgba(0,0,0,0.35)]"></div>
    </div>
  </div>
</section>


@endsection