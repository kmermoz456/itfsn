<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessage;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
  public function index(Request $r) {
    $s = $r->get('s');
    $q = Student::query();
    if ($s) {
      $q->where(function($w) use ($s){
        $w->where('prenom','like',"%$s%")
          ->orWhere('nom','like',"%$s%")
          ->orWhere('email','like',"%$s%")
          ->orWhere('phone','like',"%$s%")
          ->orWhere('whatsapp','like',"%$s%")
          ->orWhere('ville','like',"%$s%");
      });
    }
    
    $students = $q->latest()->paginate(12)->withQueryString();
    return view('admin.students.index', compact('students','s'));
  }
}
