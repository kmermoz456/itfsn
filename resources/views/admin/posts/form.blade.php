@extends('admin.layouts')

@section('admin')
<h2 class="text-xl font-extrabold">{{ isset($post) ? 'Modifier' : 'Créer' }} un article</h2>

<form action="{{ isset($post) ? route('admin.posts.update',$post) : route('admin.posts.store') }}" method="POST" class="mt-4 space-y-5">
  @csrf
  @isset($post) @method('PUT') @endisset

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="text-sm font-medium">Titre</label>
      <input class="p-1 rounded shadow bg-green-300" name="title" value="{{ old('title', $post->title ?? '') }}" required class="mt-1 w-full rounded-lg border-gray-200" />
    </div>
    <div>
      <label class="text-sm font-medium">Slug</label>
      <input  class="p-1 rounded shadow bg-green-300" name="slug" value="{{ old('slug', $post->slug ?? '') }}" class="mt-1 w-full rounded-lg border-gray-200" />
      <p class="text-xs text-gray-500 mt-1">Laisse vide pour auto-générer.</p>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="text-sm font-medium">Image (URL)</label>
      <input   name="cover_url" value="{{ old('cover_url', $post->cover_url ?? '') }}" class="mt-1 p-1  shadow bg-green-300 w-full rounded-lg border-gray-200" />
    </div>
    <div>
      <label class="text-sm font-medium">Publication</label>
      <input type="datetime-local" name="published_at"
             value="{{ old('published_at', isset($post->published_at) ? $post->published_at->format('Y-m-d\TH:i') : '') }}"
             class="mt-1 w-full rounded-lg border-gray-200" />
    </div>
  </div>

  <div>
    <label class="text-sm font-medium">Extrait</label>
    <textarea  name="excerpt" rows="2" class="mt-1 w-full  p-1  shadow bg-green-300 rounded-lg border-gray-200">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
  </div>


  
  <div >
    <label class="text-sm font-medium">Contenu</label>
    <textarea  name="content" rows="8" class="mt-1 p-2  shadow bg-green-300 w-full rounded-lg border-gray-200">{{ old('content', $post->content ?? '') }}</textarea>
  </div>

  <div class="flex items-center gap-3">
    <button class="rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-black hover:bg-emerald-400">
      {{ isset($post) ? 'Mettre à jour' : 'Publier' }}
    </button>
    <a href="{{ route('admin.posts.index') }}" class="text-sm px-3 py-2 rounded border hover:bg-gray-50">Annuler</a>
  </div>
</form>
@endsection
