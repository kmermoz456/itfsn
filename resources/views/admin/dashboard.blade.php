@extends('admin.layouts')

@section('admin')
@if(session('ok'))
  <div class="rounded-xl bg-emerald-100 text-emerald-800 px-4 py-3">{{ session('ok') }}</div>
@endif

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
  @php
    $cards = [
      ['label'=>'Visites (total)', 'value'=>$totalVisits],
      ['label'=>"Aujourd’hui",     'value'=>$todayVisits],
      ['label'=>'Cette semaine',   'value'=>$weekVisits],
      ['label'=>'Articles',        'value'=>$postsCount],
      ['label'=>'Étudiants',       'value'=>$studentsCount],
    ];
  @endphp
  @foreach($cards as $c)
  <div class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 p-4">
    <div class="text-xs text-gray-500">{{ $c['label'] }}</div>
    <div class="mt-1 text-2xl font-extrabold text-gray-900">{{ $c['value'] }}</div>
  </div>
  @endforeach
</div>

<div class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 p-5">
  <h3 class="font-semibold text-gray-900 mb-4">Visites — 7 derniers jours</h3>
  <div class="flex items-end gap-2 h-40">
    @php $max = max(1, collect($series)->max('count')); @endphp
    @foreach($series as $day)
      @php $h = (int)(($day['count'] / $max) * 100); @endphp
      <div class="flex flex-col items-center gap-2 w-10">
        <div class="w-full rounded-t-lg bg-emerald-500" style="height: {{ $h }}%"></div>
        <div class="text-[10px] text-gray-500">{{ $day['label'] }}</div>
      </div>
    @endforeach
  </div>
</div>
@endsection
