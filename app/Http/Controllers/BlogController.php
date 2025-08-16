<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class BlogController extends Controller
{
    // Liste des articles
    public function index(Request $request)
    {
        $q = trim($request->get('q', ''));

        $posts = Post::query()
            ->when($q, function ($w) use ($q) {
                $w->where(function ($s) use ($q) {
                    $s->where('title', 'like', "%{$q}%")
                      ->orWhere('excerpt', 'like', "%{$q}%")
                      ->orWhere('content', 'like', "%{$q}%");
                });
            })
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->paginate(9)
            ->withQueryString();

        $recent = Post::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->take(5)->get();

        return view('blog', compact('posts', 'q', 'recent'));
    }

    // Article unique
    public function show(Post $post)
    {
        // On protège l’accès aux articles non publiés
       // abort_if(empty($post->published_at) || $post->published_at->isFuture(), 404);

        // Lecture estimée
        $words = str_word_count(strip_tags($post->content ?? ''));
        $readingMinutes = max(1, (int) ceil($words / 200));

        // Articles récents pour la sidebar
        $recent = Post::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(6)->get();

        // Canonical (utile SEO)
        $canonical = URL::route('blog.show', $post);

        return view('show', compact('post', 'readingMinutes', 'recent', 'canonical'));
    }
}
