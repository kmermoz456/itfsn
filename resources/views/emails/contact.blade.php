@component('mail::message')
# Nouveau message de contact – ITF

**Nom :** {{ $d['prenom'] }} {{ $d['nom'] }}  
**Email :** {{ $d['email'] }}  
**Téléphone :** {{ $d['phone'] ?? '—' }}  
**Intérêt :** {{ $d['interet'] ?? '—' }}

**Objet :** {{ $d['subject'] }}

---

{!! nl2br(e($d['message'])) !!}

@endcomponent
