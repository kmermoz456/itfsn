@extends('admin.layouts')

@section('admin')

<div x-data="{q:''}" class="mt-4">
  <input x-model="q" placeholder="Filtrer dans cette page…" class="w-full p-2 shadow-md rounded-lg border-gray-900 mb-3" />

  <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100">
    <table class="w-full text-sm">
      <thead class="bg-gray-50 text-gray-600">
        <tr>
          <th class="px-4 py-3 text-left">Nom & Prénom</th>
          <th class="px-4 py-3">Email</th>
          <th class="px-4 py-3">Téléphone</th>
          <th class="px-4 py-3">WhatSapp</th>
          <th class="px-4 py-3">Sexe</th>
          <th class="px-4 py-3">Ville</th>
          <th class="px-4 py-3">Inscription</th>
        </tr>
      </thead>
      <tbody>
      @foreach($students as $st)
        <tr class="border-t" x-show="(q==='') || ('{{ Str::lower($st->nom.' '.$st->prenom.' '.$st->email.' '.$st->phone.' '.$st->ville) }}'.includes(q.toLowerCase()))">
          <td class="px-4 py-3 font-medium text-gray-900">{{ $st->nom }} {{ $st->prenom }}</td>
          <td class="px-4 py-3 text-center">{{ $st->email ?? '—' }}</td>
          <td class="px-4 py-3 text-center">{{ $st->phone ?? '—' }}</td>
          <td class="px-4 py-3 text-center">{{ $st->whatsapp ?? '—' }}</td>
          <td class="px-4 py-3 text-center">{{ $st->sexe ?? '—' }}</td>
          <td class="px-4 py-3 text-center">{{ $st->ville ?? '—' }}</td>
          <td class="px-4 py-3 text-center">{{ $st->created_at->format('d/m/Y') }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

  <div class="mt-4">{{ $students->links() }}</div>
</div>
@endsection
