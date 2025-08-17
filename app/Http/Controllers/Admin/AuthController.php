<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function showLogin() { return view('admin.login'); }

  public function login(Request $request)
  {
    $request->validate(['password' => ['required','string','max:255']]);

    $hash = config('admin.password_hash');
    if (!$hash) return back()->withErrors(['password'=>'Mot de passe non configuré.']);

    if (password_verify($request->password, $hash)) {
      $request->session()->regenerate();
      session([config('admin.session_key') => true]);

      $intended = session()->pull('intended_admin', route('admin.dashboard'));
      return redirect()->to($intended)->with('ok','Connecté.');
    }

    return back()->withErrors(['password'=>'Mot de passe invalide.'])->withInput();
  }

  public function logout(Request $request)
  {
    session()->forget(config('admin.session_key'));
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('admin.login.form')->with('ok','Déconnecté.');
  }
}
