@extends('admin.layouts')

@section('admin')
<div class="flex items-center justify-between">
  <h2 class="text-xl font-extrabold">Articles</h2>
  <a href="{{ route('admin.posts.create') }}" class="rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-black hover:bg-emerald-400">Nouvel article</a>
</div>

@if(session('ok'))<div class="mt-3 rounded bg-emerald-100 text-emerald-800 px-4 py-2">{{ session('ok') }}</div>@endif

<div class="mt-4 overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100">
  <table class="w-full text-sm">
    <thead class="bg-gray-50 text-gray-600">
      <tr>
        <th class="px-4 py-3 text-left">Titre</th>
        <th class="px-4 py-3">Publié</th>
        <th class="px-4 py-3"></th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
      <tr class="border-t">
        <td class="px-4 py-3 font-medium text-gray-900">{{ $post->title }}</td>
        <td class="px-4 py-3 text-center">{{ optional($post->published_at)->format('d/m/Y') ?? '—' }}</td>
        <td class="px-4 py-3 text-right">
          <a href="{{ route('admin.posts.edit', $post) }}" class="px-3 py-1.5 rounded border hover:bg-gray-50">Éditer</a>
          <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline">
            @csrf @method('DELETE')
            <button class="px-3 py-1.5 rounded border text-red-600 hover:bg-red-50"
              onclick="return confirm('Supprimer cet article ?')">Supprimer</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<div class="mt-4">{{ $posts->links() }}</div>
@endsection
