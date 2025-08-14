
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

  <!-- Biologie Cellulaire -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l7 4v6c0 5-7 10-7 10S5 17 5 12V6l7-4z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Biologie Cellulaire (BIC)</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Structure et fonctionnement des cellules vivantes.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
      <span class="text-sm font-semibold text-emerald-600">Crédits : 6</span>
    </div>
  </article>

  <!-- Biochimie Structurale -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 5h18v2H3zM3 11h18v2H3zM3 17h18v2H3z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Biochimie Structurale (BIS)</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Structures et fonctions des biomolécules.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
      <span class="text-sm font-semibold text-emerald-600">Crédits : 5</span>
    </div>
  </article>

  <!-- Mécanique et Optique -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 13H5v-2h14v2z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Mécanique et Optique (MEO)</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Mouvements, forces, lumière et phénomènes optiques.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
      <span class="text-sm font-semibold text-emerald-600">Crédits : 5</span>
    </div>
  </article>

  <!-- Électrostatique et Électricité -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h10v2H4z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Électrostatique et Électricité (ELE)</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Charges, champs, courants et circuits.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
      <span class="text-sm font-semibold text-emerald-600">Crédits : 5</span>
    </div>
  </article>

  <!-- Thermodynamique, Cinétique Chimique et Réaction en solution aqueuse -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg>
      </span>
      <h3 class="font-semibold text-sm text-gray-900">Thermodynamique, Cinétique Chimique & Réaction en solution aqueuse (TRA)</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Énergie, vitesses de réaction et équilibres en milieu aqueux.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
      <span class="text-sm font-semibold text-emerald-600">Crédits : 6</span>
    </div>
  </article>

  <!-- Anglais Structural -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 5h16v14H4z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Anglais Structural (ANG)</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Bases de grammaire et lexique scientifique.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM</span>
      <span class="text-sm font-semibold text-emerald-600">Crédits : 2</span>
    </div>
  </article>

  <!-- Agro-économie -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 5h16v14H4z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Agro-économie (AGE)</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Économie de la production et des marchés agricoles.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM</span>
      <span class="text-sm font-semibold text-emerald-600">Crédits : 1</span>
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
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">Crédits : 5</a></div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Mécanique quantique et liasion chimique (MQL)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des phénomènes atomiques, moléculaires et formation des liaisons chimiques.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">Crédits : 5</a></div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 7h18v2H3zM3 11h12v2H3z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Algèbre et analyse</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des fonctions, limites, équations, structures et relations algébriques.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline"> Crédits : 5</a></div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h10v2H4z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Pétrologie et géodynamique interne (PGI)</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Étude des roches, leur formation et processus géologiques internes terrestres.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">Crédits : 5</a></div>
        </article>

        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Informatique </h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Initiation à l'Informatique</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">Crédits : 2</a></div>
        </article>

       
        <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
          <div class="flex items-center gap-3">
            <span class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 5h16v14H4z"/></svg>
            </span>
            <h3 class="font-semibold text-gray-900">Recherche documentaire</h3>
          </div>
          <p class="mt-3 text-sm text-gray-600">Méthodes pour trouver, évaluer et utiliser efficacement l’information scientifique.</p>
          <div class="mt-4 flex items-center justify-between"><span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM </span><a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline"> Crédits :2</a></div>
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
            <a href="#inscription" class="text-emerald-600 text-sm font-semibold hover:underline">6</a>
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

     <!-- L2 — Semestre 1 -->
<div id="panel-l2-s1" class="subpanel grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-enter">
  <!-- Biologie Animale -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Biologie Animale</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Systématique, anatomie comparée, bases de la physiologie.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-700">Crédits : 4</span>
    </div>
  </article>

  <!-- Biologie Végétale -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Biologie Végétale</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Organisation, reproduction, diversité et observations au labo.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-700">Crédits : 4</span>
    </div>
  </article>

  <!-- Chimie Organique -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 7h18v2H3zM3 11h12v2H3z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Chimie Organique</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Fonctions, réactions, stéréochimie et applications bio.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-700">Crédits : 5</span>
    </div>
  </article>

  <!-- Physiologie Animale -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3h14v4H5zM5 9h14v12H5z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Physiologie Animale</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Neuro, cardio-respiratoire, régulations et bilans.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-700">Crédits : 4</span>
    </div>
  </article>

  <!-- Physiologie Végétale -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h10v2H4z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Physiologie Végétale</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Eau, minéraux, photosynthèse et régulations hormonales.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-700">Crédits : 4</span>
    </div>
  </article>

  <!-- Géologie Historique et Structurale -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Géologie Historique & Structurale</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Temps géologique, tectonique, lecture de cartes.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-700">Crédits : 4</span>
    </div>
  </article>

  <!-- Génétique -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h12v2H4z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Génétique</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Lois de Mendel,  intro ADN/ARN.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD</span>
      <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-700">Crédits : 4</span>
    </div>
  </article>

  <!-- Loisir -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3h14v4H5zM5 9h14v12H5z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Loisir</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Clubs, sport/arts pour l’équilibre étudiant.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM</span>
      <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-700">Crédits : 1</span>
    </div>
  </article>
</div>

<!-- L2 — Semestre 2 -->
<div id="panel-l2-s2" class="subpanel hidden opacity-0 translate-y-2 transition grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
  <!-- Enzymologie & Bioénergétique -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Enzymologie & Bioénergétique</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Cinétique, inhibition, chaîne respiratoire & ATP.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-pink-50 text-pink-700">Crédits : 5</span>
    </div>
  </article>

  <!-- Hydrologie & Hydrogéologie générale -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Hydrologie & Hydrogéologie générale</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Cycle de l’eau, nappes, mesures et cartes.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-pink-50 text-pink-700">Crédits : 4</span>
    </div>
  </article>

  <!-- Probabilité & Statistique -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 7h18v2H3zM3 11h12v2H3z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Probabilité & Statistique</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Lois usuelles, estimation, tests — pratique sous R.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD </span>
      <span class="text-xs px-2 py-1 rounded bg-pink-50 text-pink-700">Crédits : 4</span>
    </div>
  </article>

  <!-- Biochimie des Macromolécules -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h10v2H4z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Biochimie des Macromolécules</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Protéines, glucides, lipides, acides nucléiques.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-pink-50 text-pink-700">Crédits : 5</span>
    </div>
  </article>

  <!-- Thermodynamique -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3h14v4H5zM5 9h14v12H5z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Thermodynamique</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">1ᵉʳ/2ᵉ principes, enthalpie, entropie, applications bio.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM + TD + TP</span>
      <span class="text-xs px-2 py-1 rounded bg-pink-50 text-pink-700">Crédits : 5</span>
    </div>
  </article>

  <!-- Initialisation à la rédaction scientifique -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v12H4zM2 18h20v2H2z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Initialisation à la Rédaction Scientifique</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Structure IMRaD, citations, Zotero, poster & résumé.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM</span>
      <span class="text-xs px-2 py-1 rounded bg-pink-50 text-pink-700">Crédits : 2</span>
    </div>
  </article>

  <!-- Anglais Lexical -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3h14v4H5zM5 9h14v12H5z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Anglais Lexical</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">Vocabulaire scientifique, abstracts, présentations orales.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">CM</span>
      <span class="text-xs px-2 py-1 rounded bg-pink-50 text-pink-700">Crédits : 2</span>
    </div>
  </article>

  <!-- Insertion Professionnelle -->
  <article class="reveal rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-lg hover:-translate-y-1 transition bg-white">
    <div class="flex items-center gap-3">
      <span class="h-10 w-10 rounded-lg bg-pink-100 text-pink-700 flex items-center justify-center">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3h14v4H5zM5 9h14v12H5z"/></svg>
      </span>
      <h3 class="font-semibold text-gray-900">Insertion Professionnelle</h3>
    </div>
    <p class="mt-3 text-sm text-gray-600">CV, lettre, LinkedIn, soft skills & projet pro.</p>
    <div class="mt-4 flex items-center justify-between">
      <span class="text-xs px-2 py-1 rounded bg-gray-100 text-gray-700">Coaching</span>
      <span class="text-xs px-2 py-1 rounded bg-pink-50 text-pink-700">Crédits : 3</span>
    </div>
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