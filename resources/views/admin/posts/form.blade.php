@extends('admin.layouts')

@section('admin')
<h2 class="text-xl md:text-2xl font-extrabold text-gray-900">
  {{ isset($post) ? 'Modifier' : 'Créer' }} un article
</h2>

<form
  action="{{ isset($post) ? route('admin.posts.update',$post) : route('admin.posts.store') }}"
  method="POST"
  class="mt-5 space-y-7 rounded-3xl bg-white p-6 md:p-8 shadow-xl ring-1 ring-gray-100"
  x-data='mdEditor({
    initial: @json(old("content", $post->content ?? "")),
  })'
  x-init="init()"
>
  @csrf
  @isset($post) @method('PUT') @endisset

  {{-- Ligne 1 : Titre / Slug --}}
  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    <div>
      <label class="block text-sm font-medium text-gray-800">Titre <span class="text-red-500">*</span></label>
      <input name="title" value="{{ old('title', $post->title ?? '') }}" required
             class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                    focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
             placeholder="Titre accrocheur de l’article">
      @error('title')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-800">Slug</label>
      <input name="slug" value="{{ old('slug', $post->slug ?? '') }}"
             class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                    focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
             placeholder="la-url-de-votre-article">
      <p class="text-xs text-gray-500 mt-1">Laisse vide pour auto-générer.</p>
      @error('slug')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
    </div>
  </div>

  {{-- Ligne 2 : Image / Date --}}
  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    <div>
      <label class="block text-sm font-medium text-gray-800">Image (URL)</label>
      <input name="cover_url" value="{{ old('cover_url', $post->cover_url ?? '') }}"
             class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                    focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
             placeholder="https://…/image.jpg">
      @error('cover_url')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror

      {{-- Aperçu image --}}
      <div class="mt-3 aspect-video w-full overflow-hidden rounded-xl ring-1 ring-gray-200 bg-gray-50">
        @php $cover = old('cover_url', $post->cover_url ?? ''); @endphp
        @if($cover)
          <img src="{{ $cover }}" class="h-full w-full object-cover" alt="Aperçu">
        @else
          <div class="h-full w-full flex items-center justify-center text-gray-400 text-xs">Aucune image</div>
        @endif
      </div>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-800">Publication (date/heure)</label>
      <input type="datetime-local" name="published_at"
             value="{{ old('published_at', isset($post->published_at) ? $post->published_at->format('Y-m-d\TH:i') : '') }}"
             class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                    focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition">
      @error('published_at')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
    </div>
  </div>

  {{-- Extrait --}}
  <div>
    <div class="flex items-center justify-between">
      <label class="text-sm font-medium text-gray-800">Extrait</label>
      <span class="text-xs text-gray-500" x-text="excerptCount() + ' / 280'"></span>
    </div>
    <textarea name="excerpt" rows="3" maxlength="280"
              class="mt-1 w-full rounded-2xl border border-gray-200 bg-white py-2.5 px-3 shadow-sm
                     focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 transition"
              placeholder="Une courte introduction…">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
    @error('excerpt')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
  </div>

  {{-- ÉDITEUR MARKDOWN --}}
  <div class="rounded-2xl  ring-1 ring-gray-100 overflow-hidden">
    {{-- Toolbar --}}
    <div class="flex flex-wrap items-center gap-1 border-b bg-gray-50/70 px-3 py-2">
      <button type="button" class="btn" @click="wrap('**','**')" title="Gras">B</button>
      <button type="button" class="btn" @click="wrap('*','*')"  title="Italique"><em>I</em></button>
      <button type="button" class="btn" @click="wrap('`','`')"  title="Code">`</button>
      <span class="mx-2 h-5 w-px bg-gray-200"></span>
      <button type="button" class="btn" @click="heading(1)" title="Titre H1">H1</button>
      <button type="button" class="btn" @click="heading(2)" title="Titre H2">H2</button>
      <button type="button" class="btn" @click="heading(3)" title="Titre H3">H3</button>
      <span class="mx-2 h-5 w-px bg-gray-200"></span>
      <button type="button" class="btn" @click="list('- ')" title="Liste à puces">• Liste</button>
      <button type="button" class="btn" @click="olist()" title="Liste num">1. Liste</button>
      <button type="button" class="btn" @click="quote()" title="Citation">“ ”</button>
      <button type="button" class="btn" @click="codeBlock()" title="Bloc code">{ }</button>
      <span class="mx-2 h-5 w-px bg-gray-200"></span>
      <button type="button" class="btn" @click="link()" title="Lien">🔗</button>
      <button type="button" class="btn" @click="$refs.file.click()" title="Image">🖼️</button>
      <input type="file" accept="image/*" class="hidden" x-ref="file">
      <div class="ml-auto flex items-center gap-1">
        <button type="button" class="tab" :class="{ 'tab-active' : tab==='write' }" @click="tab='write'">Écrire</button>
        <button type="button" class="tab" :class="{ 'tab-active' : tab==='preview' }" @click="render(); tab='preview'">Prévisualiser</button>
      </div>
    </div>

    {{-- Zones éditeur / preview --}}
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="p-3" x-show="tab==='write'">
        <label class="block text-sm font-medium text-gray-800 mb-2">Contenu (Markdown)</label>
        <textarea name="content" x-model="content" x-ref="ta"
                  class="min-h-[360px] md:w-[800px] w-full resize-y rounded-2xl border border-gray-200 bg-white/80 p-4 leading-7 text-gray-900 placeholder-gray-400 shadow-sm
                         focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30"
                  placeholder="# Titre

Ton **Markdown** ici…
- Puces
- [Lien](https://)
- ![Image](url)
">{{ old('content', $post->content ?? '') }}</textarea>
        <p class="mt-2 text-xs text-gray-500" x-text="format(content.length) + ' caractères'"></p>
      </div>

      <div class="border-t lg:border-t-0 lg:border-l p-3 bg-gray-50/60" x-show="tab==='preview'">
        <article class="prose prose-emerald max-w-none" x-html="previewHtml"></article>
      </div>
    </div>
  </div>

  {{-- Actions --}}
  <div class="flex items-center gap-3">
    <button class="rounded-xl bg-emerald-500 px-5 py-2.5 text-sm font-semibold text-black shadow-lg hover:bg-emerald-400">
      {{ isset($post) ? 'Mettre à jour' : 'Publier' }}
    </button>
    <a href="{{ route('admin.posts.index') }}" class="text-sm px-3 py-2 rounded border hover:bg-gray-50">Annuler</a>
  </div>
</form>

{{-- Styles toolbar --}}
<style>
  .btn{ @apply rounded-lg border border-gray-200 bg-white px-2 py-1 text-xs hover:bg-gray-100; }
  .tab{ @apply rounded-lg border border-transparent px-3 py-1.5 text-xs text-gray-600 hover:bg-gray-100; }
  .tab-active{ @apply bg-white text-gray-900 border-gray-200; }
</style>

{{-- Alpine helper (Markdown) --}}
<script>
document.addEventListener('alpine:init', () => {
  Alpine.data('mdEditor', ({ initial='' }) => ({
    tab: 'write',
    content: initial,
    previewHtml: '',

    init(){ /* rien, on calcule à la demande */ },
    excerptCount(){ return (document.querySelector('[name=excerpt]')?.value || '').length; },

    // sélection
    _sel(){
      const ta = this.$refs.ta;
      return { ta, start: ta.selectionStart, end: ta.selectionEnd, val: ta.value };
    },
    wrap(open, close){
      const { ta, start, end, val } = this._sel();
      const before = val.slice(0, start), sel = val.slice(start, end), after = val.slice(end);
      this.content = `${before}${open}${sel || 'texte'}${close}${after}`;
      this.$nextTick(() => { ta.focus(); ta.selectionStart = start + open.length; ta.selectionEnd = end + open.length + (sel ? 0 : 'texte'.length); });
    },
    heading(level=2){
      const { ta, start, val } = this._sel();
      const lineStart = val.lastIndexOf("\n", start - 1) + 1;
      const prefix = '#'.repeat(level) + ' ';
      this.content = val.slice(0, lineStart) + prefix + val.slice(lineStart);
      this.$nextTick(() => { ta.focus(); ta.selectionStart = ta.selectionEnd = start + prefix.length; });
    },
    list(bullet='- '){
      const { ta, start, end, val } = this._sel();
      const sel = val.slice(start, end) || 'élément';
      const lines = sel.split('\n').map(l => (l ? bullet + l : bullet + 'élément')).join('\n');
      this.content = val.slice(0, start) + lines + val.slice(end);
      this.$nextTick(() => ta.focus());
    },
    olist(){
      const { ta, start, end, val } = this._sel();
      const sel = val.slice(start, end) || 'élément';
      let i = 1;
      const lines = sel.split('\n').map(l => `${i++}. ${l || 'élément'}`).join('\n');
      this.content = val.slice(0, start) + lines + val.slice(end);
      this.$nextTick(() => ta.focus());
    },
    quote(){
      const { ta, start, end, val } = this._sel();
      const sel = val.slice(start, end) || 'citation';
      const lines = sel.split('\n').map(l => `> ${l || 'citation'}`).join('\n');
      this.content = val.slice(0, start) + lines + val.slice(end);
      this.$nextTick(() => ta.focus());
    },
    codeBlock(){
      const { ta, start, end, val } = this._sel();
      const sel = val.slice(start, end) || 'console.log("Hello")';
      const block = `\n\`\`\`js\n${sel}\n\`\`\`\n`;
      this.content = val.slice(0, start) + block + val.slice(end);
      this.$nextTick(() => ta.focus());
    },
    link(){
      const url = prompt('URL du lien :', 'https://');
      if (!url) return;
      this.wrap('[', `](${url})`);
    },

    render(){
      const raw = window.marked ? marked.parse(this.content || '') : this.content;
      this.previewHtml = window.DOMPurify ? DOMPurify.sanitize(raw) : raw;
    },

    format(n){ return new Intl.NumberFormat().format(n); },
  }));
});
</script>
@endsection
