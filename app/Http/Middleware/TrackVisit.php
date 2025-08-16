<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;
use Illuminate\Support\Facades\Cookie;

class TrackVisit
{
   protected int $ttlMinutes = 30;

    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Ignore admin, outils, assets…
        if ($request->is([
            'admin*','horizon*','telescope*','_debugbar*','sanctum/csrf-cookie',
            'storage/*','images/*','img/*','assets/*','favicon.ico'
        ])) {
            return $response;
        }

        // filtre simple des bots
        $ua = strtolower($request->userAgent() ?? '');
        if (preg_match('/bot|crawl|spider|slurp|crawler|facebookexternalhit|whatsapp|preview|monitor/i', $ua)) {
            return $response;
        }

        // 1 visite par session (cookie 30 min)
        $cookieName = 'itf_visit';
        if (!$request->cookies->has($cookieName)) {
            try {
                Visit::create([
                    'ip'         => $request->ip(),
                    'user_agent' => substr($request->userAgent() ?? '', 0, 255),
                    'url'        => url()->current(),  // info indicative
                    'visited_at' => now(),
                ]);
            } catch (\Throwable $e) {
                // silencieux
            }
            Cookie::queue(cookie($cookieName, '1', $this->ttlMinutes));
        }

        return $response;
    }
}
