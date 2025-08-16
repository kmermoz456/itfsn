@extends('layouts.app')

@section('content')
@php
  use Illuminate\Support\Str;
  $cover = $post->cover_url;
@endphp

@if(!empty($canonical))
  <link rel="canonical" href="{{ $canonical }}">
@endif

{{-- Highlight.js (code blocks). Déplace dans le layout si tu veux --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-light.min.css"/>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

<section class="bg-gradient-to-b from-emerald-50 to-white pb-14">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">

    <nav class="text-sm text-gray-500">
      <a href="{{ route('blog.index') }}" class="hover:underline">Blog</a>
      <span class="mx-1">/</span>
      <span class="text-gray-700">{{ $post->title }}</span>
    </nav>

    <header class="mt-3">
      <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900">{{ $post->title }}</h1>
      <div class="mt-2 text-sm text-gray-500 flex flex-wrap items-center gap-3">
        <span>Publié le {{ optional($post->published_at)->translatedFormat('d F Y') }}</span>
        <span>•</span>
        <span>{{ $readingMinutes }} min de lecture</span>
      </div>
    </header>

    @if($cover)
      <figure class="mt-6 overflow-hidden rounded-2xl ring-1 ring-gray-100">
        <img src="{{ $cover }}" alt="{{ $post->title }}" class="w-full h-auto object-cover">
      </figure>
    @endif

    {{-- Contenu + Sommaire --}}
    <div class="mt-8 grid grid-cols-1 lg:grid-cols-[1fr_260px] gap-10">
      <article id="article"
        class="prose prose-emerald max-w-none
               prose-headings:scroll-mt-24
               prose-img:rounded-xl prose-img:shadow
               prose-pre:rounded-xl prose-pre:bg-gray-900 prose-pre:text-gray-100
               prose-code:px-1 prose-code:py-0.5 prose-code:bg-gray-100 prose-code:rounded"
      >
        {!! Str::markdown($post->content ?? '') !!}
      </article>

      {{-- Sommaire auto (H2/H3) --}}
      <aside class="hidden lg:block">
        <div class="sticky top-24 rounded-2xl bg-white ring-1 ring-gray-100 shadow-sm p-4">
          <div class="text-sm font-semibold text-gray-900">Sommaire</div>
          <nav id="toc" class="mt-3 space-y-2 text-sm text-gray-700"></nav>
        </div>
      </aside>
    </div>

    {{-- Partage --}}
    <div class="mt-10 flex flex-wrap items-center gap-3">
      <a target="_blank" rel="noopener"
         href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
         class="rounded-lg border px-3 py-1.5 text-sm hover:bg-gray-50">Partager Facebook</a>
      <a target="_blank" rel="noopener"
         href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->title) }}"
         class="rounded-lg border px-3 py-1.5 text-sm hover:bg-gray-50">Partager X/Twitter</a>
      <button type="button" onclick="navigator.clipboard.writeText('{{ request()->fullUrl() }}')"
              class="rounded-lg border px-3 py-1.5 text-sm hover:bg-gray-50">Copier le lien</button>
    </div>

    {{-- À lire ensuite --}}
    @if($recent->count())
      <div class="mt-12">
        <h2 class="text-lg font-bold text-gray-900">À lire ensuite</h2>
        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          @foreach($recent as $r)
            <a href="{{ route('blog.show', $r) }}" class="rounded-xl ring-1 ring-gray-100 bg-white p-3 hover:ring-emerald-200 transition">
              <div class="aspect-[16/9] overflow-hidden rounded-lg">
                <img src="{{ $r->cover_url ?: 'https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=900&q=60' }}"
                     class="h-full w-full object-cover" alt="">
              </div>
              <div class="mt-2 line-clamp-2 text-sm font-semibold text-gray-900">{{ $r->title }}</div>
              <div class="text-xs text-gray-500">{{ optional($r->published_at)->translatedFormat('d M Y') }}</div>
            </a>
          @endforeach
        </div>
      </div>
    @endif
  </div>
</section>

{{-- JSON-LD Article (SEO) --}}
<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'Article',
  'headline' => $post->title,
  'image' => $cover ?: null,
  'datePublished' => optional($post->published_at)->toIso8601String(),
  'dateModified' => optional($post->updated_at)->toIso8601String(),
  'author' => ['@type' => 'Organization', 'name' => 'Intellect Tronc SN Formation (ITF)'],
  'mainEntityOfPage' => $canonical ?? request()->fullUrl(),
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) !!}
</script>

{{-- Scripts UI : highlight + sommaire + liens externes --}}
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // 1) Code highlight
    if (window.hljs) { hljs.highlightAll(); }

    // 2) Sommaire auto (H2/H3)
    const article = document.getElementById('article');
    const toc = document.getElementById('toc');
    if (article && toc) {
      const headings = article.querySelectorAll('h2, h3');
      const items = [];
      headings.forEach((h,i) => {
        if (!h.id) {
          const base = (h.textContent || 'section').trim().toLowerCase()
            .normalize('NFD').replace(/[\u0300-\u036f]/g,'')
            .replace(/[^a-z0-9]+/g,'-').replace(/(^-|-$)/g,'');
          h.id = base || ('section-' + (i+1));
        }
        const a = document.createElement('a');
        a.href = '#' + h.id;
        a.textContent = h.textContent;
        a.className = 'block hover:text-emerald-700 ' + (h.tagName === 'H3' ? 'pl-4 text-[13px]' : 'font-medium');
        const li = document.createElement('div');
        li.appendChild(a);
        toc.appendChild(li);
        items.push({id:h.id, el:a});
      });

      // surbrillance entrée active (simple)
      const onScroll = () => {
        let current = items[0]?.id;
        const pos = window.scrollY + 120;
        headings.forEach(h => {
          if (h.offsetTop < pos) current = h.id;
        });
        items.forEach(it => it.el.classList.toggle('text-emerald-700', it.id === current));
      };
      document.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    }

    // 3) Liens externes => new tab + rel
    const host = location.host;
    article?.querySelectorAll('a[href^="http"]').forEach(a => {
      try {
        const u = new URL(a.href);
        if (u.host !== host) {
          a.target = '_blank';
          a.rel = 'noopener nofollow';
        }
      } catch (e) {}
    });
  });
</script>
@endsection
