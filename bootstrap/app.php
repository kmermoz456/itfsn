<?php

use App\Http\Middleware\AdminGate;
use App\Http\Middleware\TrackVisit;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
     
    ->withMiddleware(function (Middleware $middleware) {
        // Global (toutes les requêtes web)
        $middleware->append(TrackVisit::class);

        // Alias route
        $middleware->alias([
            'admin.gate' => AdminGate::class,
        ]);

        // (Option) uniquement sur le groupe web :
        // $middleware->group('web', [\App\Http\Middleware\TrackVisit::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->withMiddleware(function (Middleware $middleware) {
        // ✅ global (sur toutes les routes web)
        $middleware->append(TrackVisit::class);

        // 👉 Variante si tu préfères un alias pour l’appliquer seulement à certaines routes :
        // $middleware->alias(['track.site' => TrackSiteVisit::class]);
        // puis dans routes/web.php : Route::middleware('track.site')->group(function(){ ... });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
  
