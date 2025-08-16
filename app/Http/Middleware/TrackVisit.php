<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;
use Illuminate\Support\Facades\Cookie;

class TrackVisit
{
    /**
     * Durée (en minutes) pendant laquelle on considère le visiteur "déjà compté".
     * Ici 24h = 1440 minutes.
     */
    protected int $ttlMinutes = 60 * 24;

    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Ignore admin, outils et assets
        if ($request->is([
            'admin*', 'horizon*', 'telescope*', '_debugbar*', 'sanctum/csrf-cookie',
            'storage/*', 'images/*', 'img/*', 'assets/*', 'favicon.ico'
        ])) {
            return $response;
        }

        // Filtre simple des bots (garde les vrais navigateurs)
        $ua = (string) $request->userAgent();
        $uaLower = strtolower($ua);
        if (preg_match('/bot|crawl|spider|slurp|crawler|facebookexternalhit|whatsapp|preview|monitor/i', $uaLower)) {
            return $response;
        }

        // 1 visite max / 24h par navigateur via cookie
        $cookieName = 'itf_uv'; // unique visitor
        if (!$request->cookies->has($cookieName)) {

            $ip = $request->ip();
            $uaTrim = substr($ua, 0, 255);

            // Sécurité supplémentaire : ne pas recompter si déjà présent pour IP+UA sur 24h (cookie absent)
            $alreadyCounted = Visit::where('ip', $ip)
                ->where('user_agent', $uaTrim)
                ->where('visited_at', '>=', now()->subDay())
                ->exists();

            if (!$alreadyCounted) {
                try {
                    Visit::create([
                        'ip'         => $ip,
                        'user_agent' => $uaTrim,
                        // On met une URL indicative ; comme on compte "site", ce champ n'est pas utilisé pour l'agrégat
                        'url'        => $request->root(),
                        'visited_at' => now(),
                    ]);
                } catch (\Throwable $e) {
                    // On ignore proprement en cas d'erreur d'écriture
                }
            }

            // Marque le visiteur comme "déjà compté" pour 24h
            Cookie::queue(cookie($cookieName, '1', $this->ttlMinutes)); // minutes
        }

        return $response;
    }
}
