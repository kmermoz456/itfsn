<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function image(Request $request)
    {
      $request->validate([
        'image' => ['required','image','mimes:jpg,jpeg,png,webp,gif','max:4096'],
      ]);

      $path = $request->file('image')->store('uploads/md', 'public');
      return response()->json(['url' => Storage::url($path)]);
    }
}
