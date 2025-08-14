
@extends("layouts.app")

@section('content')

<section id="cours" class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Titre -->
    <header class="text-center mb-10">
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Cours de Licence 1 & 2</h2>
      <p class="mt-2 text-gray-600">Tous nos cours sont organisés par années et semestres, avec un accompagnement continu.</p>
    </header>

    <!-- Onglets L1/L2 -->
    <div role="tablist" class="flex flex-wrap justify-center gap-2 mb-6">
      <button role="tab" aria-selected="true" data-tab="l1"
              class="tab-year rounded-xl px-4 py-2 text-sm font-semibold bg-gray-900 text-white hover:bg-gray-800 focus:outline-none">
        Licence 1
      </button>
      <button role="tab" aria-selected="false" data-tab="l2"
              class="tab-year rounded-xl px-4 py-2 text-sm font-semibold bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none">
        Licence 2
      </button>
    </div>

    <!-- PANELS : L1 -->
    <div id="panel-l1" class="year-panel">

      <!-- Sous-onglets S1/S2 -->
      <div role="tablist" class="flex flex-wrap justify-center gap-2 mb-8">
        <button role="tab" aria-selected="true" data-subtab="l1-s1"
                class="subtab rounded-lg px-4 py-2 text-sm font-semibold bg-emerald-300 text-black hover:bg-emerald-400">
          Semestre 1
        </button>
        <button role="tab" aria-selected="false" data-subtab="l1-s2"
                class="subtab rounded-lg px-4 py-2 text-sm font-semibold bg-gray-100 text-gray-800 hover:bg-gray-200">
          Semestre 2
        </button>
      </div>

      <!-- Contenu L1-S1 -->
      <div id="panel-l1-s1" class="subpanel grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-enter">
        <!-- carte -->
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
              <!-- icon -->
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l7 4v6c0 5-7 10-7 10S5 17 5 12V6l7-4z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Biologie céllulaire (BIC)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude de la structure et du fonctionnement des cellules vivantes.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
            <a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a>
          </div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 5h18v2H3zM3 11h18v2H3zM3 17h18v2H3z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Biochimie des molécules simples (BMS)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Analyse de la structure et des fonctions des glucides, lipides, protéines, acides nucléiques.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD </span>
            <a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a>
          </div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 13H5v-2h14v2z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Mécanique et optique (MEO)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des mouvements, forces, lumière et phénomènes optiques.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
            <a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a>
          </div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h10v2H4z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Electrostatique et électricité (ELE)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des charges électriques, champs, courants et circuits électriques.
</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
            <a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a>
          </div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg>
            </span>
            <h3 class="font-semibold text-sm text-gray-900">Thermodynamique, Cinétique et Réaction ionique en solution aqueuses (TRA)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude chaleur, énergie, vitesses réactions et équilibres ioniques aqueux.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
            <a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a>
          </div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 5h16v14H4z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Anglais scientifique 1</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Vocabulaire et compréhension des textes scientifiques.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM</span>
            <a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a>
          </div>
        </article>

  


          <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 5h16v14H4z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Agroéconomie (AGRO)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Analyse économique de la production, distribution et gestion agricoles.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM</span>
            <a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a>
          </div>
        </article>

      </div>

      <!-- Contenu L1-S2 -->
      <div id="panel-l1-s2" class="subpanel hidden opacity-0 translate-y-2 transition grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Exemples de cartes -->
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3h14l-2 18H7L5 3z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Biologie du developpement (BID)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des processus contrôlant la croissance et la différenciation biologiques.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Mécanique quantique et liasion chimique (MQL)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des phénomènes atomiques, moléculaires et formation des liaisons chimiques.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 7h18v2H3zM3 11h12v2H3z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Mathématique</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des fonctions, limites, équations, structures et relations algébriques.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h10v2H4z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Pétrologie et géodynamique interne (PGI)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des roches, leur formation et processus géologiques internes terrestres.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Informatique </h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Initiation à l'Informatique</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>

       
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 5h16v14H4z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Recherche documentaire</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Méthodes pour trouver, évaluer et utiliser efficacement l’information scientifique.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM </span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        
<article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 5h16v14H4z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Pédologie et géodynamique externe (PGE)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des sols, formation, composition et processus géologiques externes.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
            <a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a>
          </div>
        </article>

      </div>
    </div>

    <!-- PANELS : L2 -->
    <div id="panel-l2" class="year-panel hidden opacity-0 translate-y-2 transition">

      <!-- Sous-onglets -->
      <div role="tablist" class="flex flex-wrap justify-center gap-2 mb-8">
        <button role="tab" aria-selected="true" data-subtab="l2-s1"
                class="subtab rounded-lg px-4 py-2 text-sm font-semibold bg-emerald-500 text-black hover:bg-emerald-400">
          Semestre 1
        </button>
        <button role="tab" aria-selected="false" data-subtab="l2-s2"
                class="subtab rounded-lg px-4 py-2 text-sm font-semibold bg-gray-100 text-gray-800 hover:bg-gray-200">
          Semestre 2
        </button>
      </div>

      <!-- L2-S1 -->
      <div id="panel-l2-s1" class="subpanel grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-enter">
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg></span><h3 class="font-semibold text-gray-900">Génétique I</h3></div>
          <p class="mt-3 text-sm text-gray-600">Loi de Mendel, liaison, cartes, initiation à l’ADN.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">TP</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg></span><h3 class="font-semibold text-gray-900">Écologie</h3></div>
          <p class="mt-3 text-sm text-gray-600">Population, communauté, écosystèmes & sorties de terrain.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">Terrain</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 7h18v2H3zM3 11h12v2H3z"/></svg></span><h3 class="font-semibold text-gray-900">Biochimie I</h3></div>
          <p class="mt-3 text-sm text-gray-600">Acides aminés, enzymes, métabolisme de base.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">TP</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3h14v4H5zM5 9h14v12H5z"/></svg></span><h3 class="font-semibold text-gray-900">Microbiologie</h3></div>
          <p class="mt-3 text-sm text-gray-600">Diversité microbienne et techniques de culture.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">Labo</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h10v2H4z"/></svg></span><h3 class="font-semibold text-gray-900">Outils R (initiation)</h3></div>
          <p class="mt-3 text-sm text-gray-600">Manipuler des données et faire des graphiques scientifiques.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">Ateliers</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h12v2H4z"/></svg></span><h3 class="font-semibold text-gray-900">Communication scientifique</h3></div>
          <p class="mt-3 text-sm text-gray-600">Poster, résumé, présentation claire et impactante.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">Ateliers</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
      </div>

      <!-- L2-S2 -->
      <div id="panel-l2-s2" class="subpanel hidden opacity-0 translate-y-2 transition grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg></span><h3 class="font-semibold text-gray-900">Génétique II</h3></div>
          <p class="mt-3 text-sm text-gray-600">ADN, expression, PCR, bases de la bioinfo.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">TP</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg></span><h3 class="font-semibold text-gray-900">Physiologie végétale</h3></div>
          <p class="mt-3 text-sm text-gray-600">Photosynthèse, nutrition, hormones et réponses au stress.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">TP serre</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 7h18v2H3zM3 11h12v2H3z"/></svg></span><h3 class="font-semibold text-gray-900">Biochimie II</h3></div>
          <p class="mt-3 text-sm text-gray-600">Voies métaboliques, régulations et intégrations.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">TP</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h10v2H4z"/></svg></span><h3 class="font-semibold text-gray-900">Biostat avancées</h3></div>
          <p class="mt-3 text-sm text-gray-600">ANOVA, régression, tests non paramétriques sous R.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">R pratique</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg></span><h3 class="font-semibold text-gray-900">QGIS & cartographie</h3></div>
          <p class="mt-3 text-sm text-gray-600">Bases SIG pour la biologie et la conservation.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">Projet</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3"><span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3h14v4H5zM5 9h14v12H5z"/></svg></span><h3 class="font-semibold text-gray-900">Projet tutoré</h3></div>
          <p class="mt-3 text-sm text-gray-600">Mini-projet de recherche encadré (rédaction + soutenance).</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">Encadrement</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">S’inscrire</a></div>
        </article>
      </div>
    </div>

    <!-- CTA global -->
    <div class="mt-12 text-center">
      <a href="#inscription" class="inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-6 py-3 text-sm font-semibold text-black shadow hover:bg-emerald-400 active:bg-emerald-600 transition">
        S’inscrire maintenant
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg>
      </a>
    </div>
  </div>
</section>



@endsection