@extends('admin.layouts')

@section('admin')
@if(session('ok'))
  <div class="rounded-xl bg-emerald-100 text-emerald-800 px-4 py-3">{{ session('ok') }}</div>
@endif

{{-- Cartes KPI : IP uniques --}}
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
  @php
    $cards = [
      ['label'=>'Visiteurs total', 'value'=>$uniqueTotal],
      ['label'=>" aujourd’hui",       'value'=>$uniqueToday],
      ['label'=>'cette semaine',     'value'=>$uniqueWeek],
      ['label'=>'Articles',                  'value'=>$postsCount],
      ['label'=>'Étudiants',                 'value'=>$studentsCount],
    ];
    // (Optionnel) afficher aussi les hits :
    // $cards[] = ['label'=>'Visites (hits, total)', 'value'=>$totalVisits];
  @endphp
  @foreach($cards as $c)
    <div class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 p-4">
      <div class="text-xs text-gray-500">{{ $c['label'] }}</div>
      <div class="mt-1 text-2xl font-extrabold text-gray-900">{{ number_format($c['value']) }}</div>
    </div>
  @endforeach
</div>


@endsection
