@extends('layouts.app')

@section('content')


<section class="relative overflow-hidden bg-gradient-to-b from-emerald-50 to-white py-14">
  <div class="max-w-3xl lg:max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Titre + flash -->
    <div class="text-center mb-10">
      
      <h1 class="mt-3 text-3xl md:text-4xl font-extrabold text-gray-900">Inscription — Nouveaux bacheliers</h1>
      <p class="mt-2 text-gray-600">Rejoignez <strong>Intellect Tronc SN Formation</strong> et démarrez fort en Licence.</p>

      @if(session('ok'))
        <div class="mt-4 inline-flex items-center gap-2 rounded-xl bg-emerald-100 text-emerald-800 px-4 py-3 font-medium shadow-sm">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4 1.5 1.5L11 17l-3.5-3.5L9 12z"/></svg>
          <span>{{ session('ok') }}  <a href="/">page d'accueil</a></span>
        </div>
      @endif
    </div>

    <!-- Carte formulaire -->
    <div class="relative">
      <!-- Halo dégradé -->
      <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-emerald-200 via-sky-200 to-indigo-200 blur-2xl opacity-60"></div>

      <div class="relative rounded-3xl bg-white shadow-xl ring-1 ring-black/5 p-6 md:p-8">
        <form action="{{ route('students.store') }}" method="POST" class="space-y-6">
          @csrf

          <!-- Noms -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <!-- Nom -->
            <div>
              <label class="block text-sm font-medium text-gray-800">Nom <span class="text-red-500">*</span></label>
              <div class="relative mt-1">
                <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zM4 20a8 8 0 1116 0H4z"/></svg>
                </span>
                <input
                  name="nom" value="{{ old('nom') }}" required autocomplete="family-name"
                  class="w-full rounded-2xl border border-gray-200 bg-white py-2.5 pl-10 pr-3 text-gray-900 placeholder-gray-400 shadow-sm focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/40 transition"
                  placeholder="Ex. Kouassi"
                />
              </div>
              @error('nom')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Prénom -->
            <div>
              <label class="block text-sm font-medium text-gray-800">Prénom <span class="text-red-500">*</span></label>
              <div class="relative mt-1">
                <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zM4 20a8 8 0 1116 0H4z"/></svg>
                </span>
                <input
                  name="prenom" value="{{ old('prenom') }}" required autocomplete="given-name"
                  class="w-full rounded-2xl border border-gray-200 bg-white py-2.5 pl-10 pr-3 text-gray-900 placeholder-gray-400 shadow-sm focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/40 transition"
                  placeholder="Ex. Aïcha"
                />
              </div>
              @error('prenom')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
          </div>

          <!-- Email + Téléphone (WhatsApp) -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <!-- Email (facultatif) -->
            <div>
              <label class="block text-sm font-medium text-gray-800">Email (facultatif)</label>
              <div class="relative mt-1">
                <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M2 6l10 7L22 6v12H2zM2 6l10 7L22 6H2z"/></svg>
                </span>
                <input
                  type="email" name="email" value="{{ old('email') }}" autocomplete="email"
                  class="w-full rounded-2xl border border-gray-200 bg-white py-2.5 pl-10 pr-3 text-gray-900 placeholder-gray-400 shadow-sm focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/40 transition"
                  placeholder="exemple@email.com"
                />
              </div>
              @error('email')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Téléphone (WhatsApp) -->
            <div>
              <label class="block text-sm font-medium text-gray-800">Téléphone (WhatsApp)</label>
              <div class="relative mt-1">
                <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M20 15.5A8.38 8.38 0 0112 20a8.5 8.5 0 118.5-8.5c0 1.48-.38 2.87-1.05 4.09L22 22l-1.73-1.73z"/></svg>
                </span>
                <input
                  name="whatsapp" value="{{ old('phone') }}" inputmode="tel" autocomplete="tel-national"
                  class="w-full rounded-2xl border border-gray-200 bg-white py-2.5 pl-10 pr-3 text-gray-900 placeholder-gray-400 shadow-sm focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/40 transition"
                  placeholder="+225 07 87 12 44 76"
                />
              </div>
              @error('phone')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
          </div>

          <!-- Téléphone 2 + Sexe -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <!-- Téléphone 2 (WhatsApp secondaire) -->
            <div>
              <label class="block text-sm font-medium text-gray-800">Téléphone 2 (optionnel)</label>
              <div class="relative mt-1">
                <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M20 15.5A8.38 8.38 0 0112 20a8.5 8.5 0 118.5-8.5c0 1.48-.38 2.87-1.05 4.09L22 22l-1.73-1.73z"/></svg>
                </span>
                <input
                  name="phone" value="{{ old('whatsapp') }}" inputmode="tel" autocomplete="tel"
                  class="w-full rounded-2xl border border-gray-200 bg-white py-2.5 pl-10 pr-3 text-gray-900 placeholder-gray-400 shadow-sm focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/40 transition"
                  placeholder="+225 …"
                />
              </div>
              @error('whatsapp')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Sexe -->
            <div>
              <label class="block text-sm font-medium text-gray-800">Sexe</label>
              <div class="relative mt-1">
                <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a7 7 0 100 14 7 7 0 000-14zM11 16v6h2v-6h-2z"/></svg>
                </span>
                <select
                  name="sexe"
                  class="w-full appearance-none rounded-2xl border border-gray-200 bg-white py-2.5 pl-10 pr-9 text-gray-900 shadow-sm focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/40 transition">
                  <option value="">—</option>
                  <option value="H" @selected(old('sexe')==='H')>H</option>
                  <option value="F" @selected(old('sexe')==='F')>F</option>
                  <option value="Autre" @selected(old('sexe')==='Autre')>Autre</option>
                </select>
                <!-- Chevron -->
                <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
                  <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M7 10l5 5 5-5z"/></svg>
                </span>
              </div>
              @error('sexe')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
          </div>

          <!-- Ville -->
          <div>
            <label class="block text-sm font-medium text-gray-800">Commune / Ville</label>
            <div class="relative mt-1">
              <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a7 7 0 00-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 00-7-7zm0 9.5A2.5 2.5 0 119.5 9 2.5 2.5 0 0112 11.5z"/></svg>
              </span>
              <input
                name="ville" value="{{ old('ville') }}" autocomplete="address-level2"
                class="w-full rounded-2xl border border-gray-200 bg-white py-2.5 pl-10 pr-3 text-gray-900 placeholder-gray-400 shadow-sm focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/40 transition"
                placeholder="Ex. Abidjan, Cocody"
              />
            </div>
            @error('ville')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
          </div>

          <!-- Bouton -->
          <div class="pt-2">
            <button
              class="w-full inline-flex items-center justify-center gap-2 rounded-2xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-black shadow-lg hover:bg-emerald-400 active:bg-emerald-600 transition">
              Je m’inscris
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59 13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
            </button>
            <p class="mt-2 text-center text-xs text-gray-500">
              En envoyant ce formulaire, vous acceptez d’être contacté·e par notre équipe pédagogique.
            </p>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>




@endsection
