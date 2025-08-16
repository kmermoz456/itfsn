<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    /**
     * Affiche le formulaire d'inscription.
     */
    public function create()
    {
        // Assure-toi que la vue est bien resources/views/students/create.blade.php
        return view('student.create');
    }

    /**
     * Enregistre une nouvelle inscription.
     */
    public function store(Request $request)
    {
        // Règles
        $rules = [
            'prenom'   => ['required', 'string', 'max:120'],
            'nom'      => ['required', 'string', 'max:120'],
            'email'    => ['nullable', 'email', 'max:190', 'unique:students,email'],
            'whatsapp' => ['nullable', 'string', 'max:30',  'unique:students,whatsapp'],
            'phone'    => ['nullable', 'string', 'max:30',  'unique:students,phone'],
            'sexe'     => ['nullable', 'in:H,F,Autre'],
            'ville'    => ['nullable', 'string', 'max:120'],
        ];

        // Messages personnalisés (exemples)
        $messages = [
            'prenom.required' => 'Le prénom est obligatoire.',
            'nom.required'    => 'Le nom est obligatoire.',
            'email.email'     => 'Veuillez saisir une adresse e-mail valide.',
            'email.unique'    => 'Cet e-mail est déjà utilisé.',
            'whatsapp.unique' => 'Ce numéro WhatsApp est déjà enregistré.',
            'phone.unique'    => 'Ce numéro de téléphone est déjà enregistré.',
            'sexe.in'         => 'Le sexe doit être : H, F ou Autre.',
        ];

        // Noms “propres” pour :attribute
        $attributes = [
            'prenom'   => 'prénom',
            'nom'      => 'nom',
            'email'    => 'adresse e-mail',
            'whatsapp' => 'WhatsApp',
            'phone'    => 'téléphone',
            'sexe'     => 'sexe',
            'ville'    => 'commune',
        ];

        $data = $request->validate($rules, $messages, $attributes);

        // Création
        $student = Student::create($data);

        // Prépare l’email d’alerte
        $subject = 'Nouvelle inscription — ' . $student->prenom . ' ' . $student->nom;

        // Adresse de réception : tu peux définir MAIL_TO=contact@itfuna.site dans .env
        $to = config('mail.to.address')
            ?? config('mail.from.address')
            ?? 'contact@itfuna.site';

        // Données envoyées au mailable
        $mailData = [
            'subject'  => $subject,
            'name'     => $student->prenom . ' ' . $student->nom,
            'email'    => $student->email,
            'phone'    => $student->phone,
            'whatsapp' => $student->whatsapp,
            'sexe'     => $student->sexe,
            'ville'    => $student->ville,
            'message'  => 'Nouvelle inscription depuis le site web.',
        ];

        // Envoi (le ContactMessage que je t’ai donné gère le fallback du sujet)
        Mail::to($to)->send(new ContactMessage($mailData, $subject));

        return redirect()
            ->route('students.create')
            ->with('ok', 'Merci ! Votre inscription a bien été enregistrée. Nous vous contacterons très vite 👍');
    }

    // Les autres méthodes REST sont laissées vides si non utilisées

    public function index()  { abort(404); }
    public function show(string $id)   { abort(404); }
    public function edit(string $id)   { abort(404); }
    public function update(Request $request, string $id) { abort(404); }
    public function destroy(string $id) { abort(404); }
}
