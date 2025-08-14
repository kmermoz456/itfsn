<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;

class TrackVisit
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // N'enregistre pas l'admin
        if (!str_starts_with($request->path(), 'admin')) {
            try {
                Visit::create([
                    'ip'         => $request->ip(),
                    'user_agent' => substr($request->userAgent() ?? '', 0, 255),
                    'url'        => substr($request->fullUrl(), 0, 1024),
                    'visited_at' => now(),
                ]);
            } catch (\Throwable $e) {}
        }

        return $response;
    }
}
