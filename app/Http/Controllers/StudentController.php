<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
         $data = $request->validate([
           
            'prenom' => ['required','string','max:120'],
            'nom'    => ['required','string','max:120'],
            'email'  => ['email','max:190','unique:students,email'],
            'whatsapp' => ['required','string','max:30','unique:students,email'],
            'phone'  => ['nullable','string','max:30','unique:students,email'],
            'sexe' => ['nullable','in:H,F,Autre'],
            'ville' => ['nullable','string','max:120'],
            
         ]);

          Mail::to(config('mail.from.address', 'kmermoz456@gmail.com.com'))
            ->send(new ContactMessage($data));

         Student::create($data);

        return redirect()->route('students.create')
            ->with('ok', 'Merci ! Votre inscription a bien été enregistrée. Nous vous contacterons très vite 👍');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
