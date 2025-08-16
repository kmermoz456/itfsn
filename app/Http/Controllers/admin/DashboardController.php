<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use App\Models\Post;
use App\Models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Base (exclut les bots si tu as une colonne is_bot)
        $base = Visit::query();
        if (Schema::hasColumn('visits', 'is_bot')) {
            $base->where('is_bot', false);
        }

        // Adapte les expressions SQL au SGBD (pgsql vs mysql)
        $driver   = DB::connection()->getDriverName();
        $dateExpr = $driver === 'pgsql' ? "CAST(visited_at AS DATE)" : "DATE(visited_at)";
        $fpExpr   = $driver === 'pgsql'
            ? "(ip || ':' || COALESCE(user_agent,''))"
            : "CONCAT(ip, ':', COALESCE(user_agent,''))"; // fingerprint visiteur = IP+UA

        $today       = Carbon::today();
        $startOfWeek = $today->copy()->startOfWeek();
        $endOfWeek   = $today->copy()->endOfWeek();

        // ===== Visiteurs uniques (IP + UA) =====
        $uniqueTotal = (clone $base)
            ->selectRaw("COUNT(DISTINCT {$fpExpr}) AS c")
            ->value('c');

        $uniqueToday = (clone $base)
            ->whereDate('visited_at', $today)
            ->selectRaw("COUNT(DISTINCT {$fpExpr}) AS c")
            ->value('c');

        $uniqueWeek = (clone $base)
            ->whereBetween('visited_at', [$startOfWeek, $endOfWeek])
            ->selectRaw("COUNT(DISTINCT {$fpExpr}) AS c")
            ->value('c');

        // (Optionnel) si tu veux aussi afficher les "hits" (toutes entrées)
        // $totalVisits = (clone $base)->count();
        // $todayVisits = (clone $base)->whereDate('visited_at', $today)->count();
        // $weekVisits  = (clone $base)->whereBetween('visited_at', [$startOfWeek, $endOfWeek])->count();

        $postsCount    = Post::count();
        $studentsCount = Student::count();

        // ===== Série 7 jours — visiteurs uniques / jour =====
        $from = $today->copy()->subDays(6);
        $rows = (clone $base)
            ->selectRaw("{$dateExpr} AS d, COUNT(DISTINCT {$fpExpr}) AS uniques")
            ->whereDate('visited_at', '>=', $from)
            ->groupBy('d')
            ->orderBy('d')
            ->pluck('uniques', 'd'); // ['YYYY-MM-DD' => N]

        $series = [];
        for ($i = 0; $i < 7; $i++) {
            $day = $from->copy()->addDays($i);
            $series[] = [
                'label' => $day->format('d/m'),
                'count' => (int) ($rows[$day->toDateString()] ?? 0),
            ];
        }

        return view('admin.dashboard', compact(
            'uniqueTotal', 'uniqueToday', 'uniqueWeek',
            'postsCount', 'studentsCount', 'series'
            // , 'totalVisits', 'todayVisits', 'weekVisits' // si tu veux afficher les hits
        ));
    }
}
