<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
  public function index() {
    $posts = Post::latest('published_at')->latest()->paginate(10);
    return view('admin.posts.index', compact('posts'));
  }

  public function create()  { return view('admin.posts.form'); }
  public function edit(Post $post) { return view('admin.posts.form', compact('post')); }

  public function store(Request $r) {
    $data = $r->validate([
      'title' => ['required','string','max:255'],
      'slug'  => ['nullable','string','max:255','unique:posts,slug'],
      'cover_url' => ['nullable','url'],
      'excerpt' => ['nullable','string'],
      'content' => ['nullable','string'],
      'published_at' => ['nullable','date'],
    ]);
    if (empty($data['slug'])) $data['slug'] = Str::slug($data['title']).'-'.Str::random(5);
    Post::create($data);
    return redirect()->route('admin.posts.index')->with('ok','Article créé.');
  }

  public function update(Request $r, Post $post) {
    $data = $r->validate([
      'title' => ['required','string','max:255'],
      'slug'  => ['required','string','max:255','unique:posts,slug,'.$post->id],
      'cover_url' => ['nullable','url'],
      'excerpt' => ['nullable','string'],
      'content' => ['nullable','string'],
      'published_at' => ['nullable','date'],
    ]);
    $post->update($data);
    return redirect()->route('admin.posts.index')->with('ok','Article mis à jour.');
  }

  public function destroy(Post $post) {
    $post->delete();
    return back()->with('ok','Article supprimé.');
  }
}
