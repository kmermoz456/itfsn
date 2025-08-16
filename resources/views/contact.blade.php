@extends("layouts.app")

@section('content')


<section class="relative isolate  overflow-hidden bg-gradient-to-b from-emerald-50 to-white">
  {{-- BG deco --}}
  <div class="pointer-events-none absolute -top-28 -right-28 h-96 w-96 rounded-full bg-emerald-200/40 blur-3xl"></div>

  {{-- Hero --}}
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-6 text-center">
    <span class="inline-flex items-center rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-emerald-200">Contact ITF</span>
    <h1 class="mt-3 text-3xl md:text-4xl font-extrabold text-gray-900">Parlons de votre avenir à l’<span class="text-emerald-600">ITF</span></h1>
    <p class="mt-2 text-gray-600 max-w-2xl mx-auto">
      Questions sur l’inscription, les programmes ou l’accompagnement ? Écrivez-nous, on répond vite.
    </p>

    @if(session('ok'))
      <div x-data="{show:true}" x-show="show" x-transition
           class="mt-5 inline-flex items-center gap-2 rounded-2xl bg-emerald-100 text-emerald-800 px-4 py-2 ring-1 ring-emerald-200">
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4 1.5 1.5L11 17l-3.5-3.5L9 12z"/></svg>
        {{ session('ok') }}
        <button class="ml-2 text-emerald-800/60" @click="show=false">Fermer</button>
      </div>
    @endif
  </div>

  {{-- Grille principale --}}
  <div class="max-w-7xl mx-auto flex justify-center px-4 sm:px-6 lg:px-8 pb-16  gap-8">
    {{-- Formulaire --}}
    <div>
      <div class="relative">
        <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-emerald-200 via-sky-200 to-indigo-200 blur-2xl opacity-60"></div>

        <div class="relative rounded-3xl bg-white shadow-xl ring-1 ring-black/5 p-6 md:p-8">
          <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
            @csrf

            {{-- honeypot (anti-bot) --}}
            <input type="text" name="website" class="hidden" tabindex="-1" autocomplete="off">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="text-sm font-medium text-gray-800">Prénom *</label>
                <input name="prenom" value="{{ old('prenom') }}" required
                       class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                              focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
                       placeholder="Ex. Aïcha">
                @error('prenom')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
              </div>
              <div>
                <label class="text-sm font-medium text-gray-800">Nom *</label>
                <input name="nom" value="{{ old('nom') }}" required
                       class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                              focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
                       placeholder="Ex. Kouadio">
                @error('nom')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
              </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="text-sm font-medium text-gray-800">Email *</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                              focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
                       placeholder="vous@exemple.com">
                @error('email')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
              </div>
              <div>
                <label class="text-sm font-medium text-gray-800">Téléphone / WhatsApp</label>
                <input name="phone" value="{{ old('phone') }}"
                       class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                              focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
                       placeholder="Ex. 0X XX XX XX XX">
                @error('phone')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
              </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="text-sm font-medium text-gray-800">Objet *</label>
                <input name="subject" value="{{ old('subject') }}" required
                       class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                              focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
                       placeholder="Inscription, programme, tarifs…">
                @error('subject')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
              </div>
              <div>
                <label class="text-sm font-medium text-gray-800">Intérêt</label>
                <select name="interet"
                        class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                               focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition">
                  <option value="">— Sélectionner —</option>
                  <option>Licence 1 — Renforcement SN</option>
                  <option>Licence 2 — Renforcement SN</option>
                  <option>Coaching & Méthodologie</option>
                  <option>Autre demande</option>
                </select>
              </div>
            </div>

            <div>
              <label class="text-sm font-medium text-gray-800">Votre message *</label>
              <textarea name="message" rows="6" required
                        class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                               focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
                        placeholder="Dites-nous en plus sur votre besoin…">{{ old('message') }}</textarea>
              @error('message')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="pt-2">
              <button class="w-full inline-flex items-center justify-center gap-2 rounded-2xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-black shadow-lg hover:bg-emerald-400 active:bg-emerald-600 transition">
                Envoyer le message
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3l2 7 10 2-10 2z"/></svg>
              </button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection