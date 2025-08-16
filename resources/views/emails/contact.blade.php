{{-- resources/views/emails/contact.blade.php --}}
@php
  // Sécurise l'accès aux données
  $d = $d ?? [];

  // Construit un nom complet si on reçoit prenom/nom ou name
  $fullName = trim(
      ($d['name'] ?? ($d['prenom'] ?? '')) . ' ' . ($d['nom'] ?? '')
  );

  // Sujet affiché dans le corps (le vrai sujet est déjà mis par le Mailable)
  $subjectLine = $d['subject'] ?? 'Nouveau message';
@endphp

@component('mail::message')
# {{ $subjectLine }}

@component('mail::panel')
Nouveau message reçu depuis le site **Intellect Tronc SN Formation**.
@endcomponent

@component('mail::table')
| Champ        | Valeur |
|:------------ |:------ |
| Nom complet  | {{ $fullName !== '' ? $fullName : '—' }} |
| E-mail       | {{ $d['email'] ?? '—' }} |
| Téléphone    | {{ $d['phone'] ?? '—' }} |
| WhatsApp     | {{ $d['whatsapp'] ?? '—' }} |
| Sexe         | {{ $d['sexe'] ?? '—' }} |
| Ville        | {{ $d['ville'] ?? '—' }} |
| Reçu le      | {{ now()->format('d/m/Y H:i') }} |
@endcomponent

@if(!empty($d['message']))
**Message :**

> {!! nl2br(e($d['message'])) !!}
@endif

@php
  $replyTo = $d['email'] ?? (config('mail.from.address') ?: 'contact@itfuna.site');
@endphp

@component('mail::button', ['url' => 'mailto:'.$replyTo])
Répondre
@endcomponent

Merci,  
**Intellect Tronc SN Formation**  
@endcomponent
