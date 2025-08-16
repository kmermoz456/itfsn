@extends('admin.layouts')

@section('admin')
@if(session('ok'))
  <div class="rounded-xl bg-emerald-100 text-emerald-800 px-4 py-3">{{ session('ok') }}</div>
@endif

{{-- Cartes KPI (visiteurs uniques + contenus) --}}
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
  @php
    $cards = [
      ['label'=>'Visiteurs (total)',        'value'=>$uniqueTotal],
      ['label'=>"Visiteurs aujourd’hui",    'value'=>$uniqueToday],
      ['label'=>'Visiteurs cette semaine',  'value'=>$uniqueWeek],
      ['label'=>'Articles',                 'value'=>$postsCount],
      ['label'=>'Étudiants',                'value'=>$studentsCount],
    ];
  @endphp

  @foreach($cards as $c)
    <div class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 p-4">
      <div class="text-xs text-gray-500">{{ $c['label'] }}</div>
      <div class="mt-1 text-2xl font-extrabold text-gray-900">{{ number_format((int)$c['value']) }}</div>
    </div>
  @endforeach
</div>

{{-- Courbe : visiteurs uniques — 7 derniers jours --}}
<div
  x-data="chart(@js($series))"
  class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 p-5 mt-6"
>
  <div class="flex items-center justify-between">
    <h3 class="font-semibold text-gray-900">Visiteurs uniques — 7 derniers jours</h3>
    <span class="text-xs text-gray-500">Données basées sur IP + navigateur</span>
  </div>

  <div class="mt-3">
    <template x-if="!points.length || points.reduce((s,d)=>s+(Number(d.count)||0),0)===0">
      <div class="h-36 flex items-center justify-center text-sm text-gray-500">
        Pas encore de données suffisantes.
      </div>
    </template>

    <template x-if="points.length && points.reduce((s,d)=>s+(Number(d.count)||0),0)>0">
      <svg :viewBox="'0 0 '+w+' '+h" class="w-full">
        <!-- Grille horizontale -->
        <template x-for="t in ticks()" :key="t.y">
          <g>
            <line x1="28" :y1="t.y" :x2="w-28" :y2="t.y" stroke="#E5E7EB" stroke-dasharray="3 3" />
            <text x="6" :y="t.y+4" class="fill-gray-400 text-[10px]" x-text="t.val"></text>
          </g>
        </template>

        <!-- Courbe -->
        <path :d="path()" fill="none" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>

        <!-- Points -->
        <template x-for="(d,i) in points" :key="i">
          <circle :cx="x(i)" :cy="y(Number(d.count)||0)" r="3" fill="#10B981"></circle>
        </template>

        <!-- Labels X -->
        <template x-for="(d,i) in points" :key="'x'+i">
          <text :x="x(i)" :y="h-8" text-anchor="middle" class="fill-gray-500 text-[10px]" x-text="d.label"></text>
        </template>
      </svg>
    </template>
  </div>
</div>

<script>
  // Alpine helper: évite les soucis de guillemets dans l'attribut x-data
  function chart(points) {
    return {
      points, w: 640, h: 220, p: 28,
      get innerW(){ return this.w - this.p*2 },
      get innerH(){ return this.h - this.p*2 },
      get maxY(){ return Math.max(1, ...this.points.map(d => Number(d.count)||0)) * 1.15 },
      x(i){ return this.p + (this.points.length>1 ? this.innerW*(i/(this.points.length-1)) : 0) },
      y(v){ return this.p + this.innerH - (v/this.maxY)*this.innerH },
      path(){
        if (!this.points.length) return '';
        return this.points
          .map((d,i) => (i ? 'L' : 'M') + this.x(i) + ',' + this.y(Number(d.count)||0))
          .join(' ');
      },
      ticks(){
        // 5 repères Y
        return Array.from({length:6}, (_,i) => {
          const val = Math.round(this.maxY * (1 - i/5));
          const y   = this.p + this.innerH * (i/5);
          return { y, val };
        });
      }
    }
  }
</script>



@endsection
