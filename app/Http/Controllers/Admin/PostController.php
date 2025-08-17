<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        // Tri stable : d'abord par date de publication, puis par création
        $posts = Post::orderByDesc('published_at')->orderByDesc('created_at')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.form');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.form', compact('post'));
    }

    public function store(Request $r)
    {
        $data = $r->validate([
            'title'        => ['required','string','max:255'],
            'slug'         => ['nullable','string','max:255','unique:posts,slug'],
            'cover_url'    => ['nullable','url'],
            'excerpt'      => ['nullable','string'],
            'content'      => ['nullable','string'],
            'published_at' => ['nullable','date'], // format 'Y-m-d\TH:i' ou compatible Carbon
        ]);

        // Slug auto si vide
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']).'-'.Str::random(5);
        }

        // Normalisation des champs vides -> null
        $data['cover_url']    = $data['cover_url']    ?: null;
        $data['excerpt']      = $data['excerpt']      ?: null;
        $data['content']      = $data['content']      ?: null;

        // Normaliser published_at (évite les erreurs de format dans les vues)
        // <input type="datetime-local"> renvoie 'YYYY-MM-DDTHH:MM'
        if (!empty($data['published_at'])) {
            try {
                // parse gère aussi d'autres formats si besoin
                $data['published_at'] = Carbon::parse($data['published_at']);
            } catch (\Throwable $e) {
                $data['published_at'] = null; // fallback si parsing impossible
            }
        } else {
            $data['published_at'] = null;
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('ok', 'Article créé.');
    }

    public function update(Request $r, Post $post)
    {
        $data = $r->validate([
            'title'        => ['required','string','max:255'],
            'slug'         => [
                'nullable', // on laisse vide => on auto-génère plus bas
                'string',
                'max:255',
                Rule::unique('posts', 'slug')->ignore($post->id),
            ],
            'cover_url'    => ['nullable','url'],
            'excerpt'      => ['nullable','string'],
            'content'      => ['nullable','string'],
            'published_at' => ['nullable','date'],
        ]);

        // Slug auto si vide
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']).'-'.Str::random(5);
        }

        // Normalisation des champs vides -> null
        $data['cover_url']    = $data['cover_url']    ?: null;
        $data['excerpt']      = $data['excerpt']      ?: null;
        $data['content']      = $data['content']      ?: null;

        // Normaliser published_at
        if (!empty($data['published_at'])) {
            try {
                $data['published_at'] = Carbon::parse($data['published_at']);
            } catch (\Throwable $e) {
                $data['published_at'] = null;
            }
        } else {
            $data['published_at'] = null;
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('ok', 'Article mis à jour.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('ok', 'Article supprimé.');
    }
}
