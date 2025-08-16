@extends("layouts.app")

@section('content')

<section class="bg-gradient-to-b from-emerald-50 to-white py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    
    <div class="text-center">
      <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900">Conseils, actualités et ressources pour réussir en Sciences Naturelles.</p>
</h1>

     
    </div>

    {{-- Grille d’articles --}}
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @forelse($posts as $p)
        <article class="group rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 overflow-hidden flex flex-col">
          <a href="{{ route('blog.show', $p) }}" class="relative block aspect-[16/9] overflow-hidden">
            <img
              src="{{ $p->cover_url ?: 'https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=1200&q=60' }}"
              alt="{{ $p->title }}"
              class="h-full w-full object-cover transition group-hover:scale-105">
          </a>
          <div class="p-4 flex-1 flex flex-col">
            <a href="{{ route('blog.show', $p) }}" class="font-bold text-gray-900 group-hover:text-emerald-700 transition">
              {{ $p->title }}
            </a>
            <div class="mt-1 text-xs text-gray-500">
              Publié le {{ optional($p->published_at)->translatedFormat('d F Y') }}
            </div>
            <p class="mt-3 text-sm text-gray-700 line-clamp-3">
              {{ $p->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($p->content), 160) }}
            </p>
            <div class="mt-auto pt-4">
              <a href="{{ route('blog.show', $p) }}"
                 class="inline-flex items-center gap-2 text-emerald-700 font-semibold hover:underline">
                Lire l’article
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg>
              </a>
            </div>
          </div>
        </article>
      @empty
        <div class="col-span-full">
          <div class="rounded-2xl bg-white ring-1 ring-gray-100 p-8 text-center">
            <p class="text-gray-600">Aucun article trouvé.</p>
          </div>
        </div>
      @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-8">
      {{ $posts->onEachSide(1)->links() }}
    </div>

    {{-- Bloc “derniers” (optionnel) --}}
    @if($recent->count())
    <div class="mt-14">
      <h2 class="text-lg font-bold text-gray-900">Derniers publiés</h2>
      <div class="mt-4 grid grid-cols-2 md:grid-cols-5 gap-4">
        @foreach($recent as $r)
          <a href="{{ route('blog.show', $r) }}"
             class="rounded-xl ring-1 ring-gray-100 bg-white p-3 hover:ring-emerald-200 transition">
            <div class="aspect-video overflow-hidden rounded-lg">
              <img src="{{ $r->cover_url ?: 'https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=900&q=60' }}"
                   class="h-full w-full object-cover" alt="">
            </div>
            <div class="mt-2 line-clamp-2 text-xs font-medium text-gray-800">{{ $r->title }}</div>
          </a>
        @endforeach
      </div>
    </div>
    @endif
  </div>
</section>
@endsection
