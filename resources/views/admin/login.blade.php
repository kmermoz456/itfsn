@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<section class="min-h-[70vh] bg-gradient-to-b from-emerald-50 to-white flex items-center">
  <div class="max-w-md mx-auto w-full px-4 sm:px-6">
    <div class="text-center mb-6">
      <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900">Accès administrateur</h1>
      <p class="mt-2 text-gray-600">Saisis le mot de passe pour entrer.</p>
      @if(session('ok'))
        <div class="mt-3 inline-flex items-center gap-2 rounded-xl bg-emerald-100 text-emerald-800 px-4 py-2">
          <span>{{ session('ok') }}</span>
        </div>
      @endif
    </div>

    <div class="relative">
      <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-emerald-200 via-sky-200 to-indigo-200 blur-2xl opacity-60"></div>

      <div class="relative rounded-3xl bg-white shadow-xl ring-1 ring-black/5 p-6">
        <form method="POST" action="{{ route('admin.login') }}" x-data="{show:false}">
          @csrf
          <label class="block text-sm font-medium text-gray-800">Mot de passe</label>
          <div class="mt-1 relative">
            <input :type="show ? 'text' : 'password'" name="password"
                   class="w-full rounded-2xl border border-gray-200 bg-white py-2.5 pr-12 pl-3 text-gray-900 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/40 transition"
                   placeholder="••••••••" autofocus />
            <button type="button" @click="show=!show"
                    class="absolute inset-y-0 right-3 flex items-center text-gray-500 hover:text-gray-700">👁</button>
          </div>
          @error('password')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror

          <button class="mt-5 w-full inline-flex items-center justify-center gap-2 rounded-2xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-black shadow-lg hover:bg-emerald-400 transition">
            Entrer
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
