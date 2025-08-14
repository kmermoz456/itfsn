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
          « Intellect Tronc SN Formation m’a offert la méthode et l’assurance pour réussir ma L1. Les cours et TD sont bien expliqués.! »
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://itfuna.test/img/mer.png" alt="">
          <div>
            <p class="font-semibold text-gray-900">Kouamé Mermoz</p>
            <p class="text-xs text-gray-500">promo 2019</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
          « J’ai trouvé une vraie communauté. On révise ensemble, on s’entraide, et les enseignants sont très expérimentés. »
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://itfuna.test/img/dyb.png" alt="">
          <div>
            <p class="font-semibold text-gray-900">Diby Grâce</p>
            <p class="text-xs text-gray-500">Licence 2, promo 2024.</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
      «  Les préparations et les fiches résumées m’ont aidé à valider ma L1 et ma L2. Merci à Intellect Tronc SN Formation. » 
        </p>
                <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://itfuna.test/img/elie.png" alt="">
          <div>
            <p class="font-semibold text-gray-900">Aïcha Koné</p>
            <p class="text-xs text-gray-500">Master 1, promo 2022</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
          « Dès ma 1ère année, Intellect Tronc SN Formation m’a donné les clés pour réussir grâce à ses cours clairs et TD corrigés. » 
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://itfuna.test/img/akaf.png" alt="">
          <div>
            <p class="font-semibold text-gray-900">C. Akaffou </p>
            <p class="text-xs text-gray-500"> promo 2019</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
        « Grâce à Intellect Tronc SN Formation, j’ai validé ma L1 avec succès et je poursuis maintenant en Licence 2 en toute confiance. »  
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://itfuna.test/img/gnak.png" alt="">
          <div>
            <p class="font-semibold text-gray-900"> Djakouri.</p>
            <p class="text-xs text-gray-500">Licence 2, promo 2024</p>
          </div>
        </div>
      </article>

      <!-- Carte -->
      <article class="rounded-xl border border-gray-100 bg-indigo-50 p-6 shadow-sm">
        <div class="text-indigo-500 mb-3">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 7h4v6H6v4H3v-6a4 4 0 014-4zm10 0h4v6h-5v4h-3v-6a4 4 0 014-4z"/></svg>
        </div>
        <p class="text-gray-700">
        Intellect Tronc SN Formation m’a aidé à réussir ma L1. Aujourd’hui, je monte en Licence 2 prêt à relever de nouveaux défis 
        </p>
        <div class="mt-5 flex items-center gap-3">
          <img class="h-10 w-10 rounded-full object-cover" src="https://itfuna.test/img/gnak.png" alt="">
          <div>
            <p class="font-semibold text-gray-900">Gbané Yanick</p>
            <p class="text-xs text-gray-500">Licence 2, promo 2024</p>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- SECTION : Bandeau CTA -->
<section class="py-10  bg-transparent">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative overflow-hidden rounded-3xl shadow p-2  text-gray-900">
      <div class="md:grid flex items-center justify-center grid-cols-1 md:grid-cols-3 gap-0">
        <!-- Image -->
        <div class="md:col-span-1">
          <img
            src="{{asset('img/icon.png')}}"
            alt="Étudiante motivée"
            class=" w-50 object-cover md:rounded-l-3xl"
          />
        </div>
        <!-- Texte + CTA -->
        <div class="md:col-span-2 p-6 md:p-10">
          <h3 class="text-2xl font-extrabold">Avec Intellect Tronc SN Formation</h3>
          <p class="mt-2 text-gray/90">Votre reussite est notre priorité
          </p>
          <div class="mt-5">
            <a href="{{route('students.create')}}"
               class="inline-flex items-center gap-2 rounded-xl bg-amber-400 px-5 py-3 text-sm font-semibold text-gray-900 shadow hover:bg-amber-300 active:bg-amber-500 transition">
              Rejoingnez nous des maintenant
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