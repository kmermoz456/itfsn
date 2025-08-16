<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use App\Models\Post;
use App\Models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function index()
    {
        // Base (exclut les bots si la colonne existe)
        $base = Visit::query();
        if (Schema::hasColumn('visits', 'is_bot')) {
            $base->where('is_bot', false);
        }

        $today       = Carbon::today();
        $startOfWeek = $today->copy()->startOfWeek();
        $endOfWeek   = $today->copy()->endOfWeek();

        // ===== Visiteurs (IP uniques) =====
        $uniqueTotal = (clone $base)->distinct('ip')->count('ip');
        $uniqueToday = (clone $base)->whereDate('visited_at', $today)->distinct('ip')->count('ip');
        $uniqueWeek  = (clone $base)->whereBetween('visited_at', [$startOfWeek, $endOfWeek])->distinct('ip')->count('ip');

        // (Optionnel) Hits si tu veux encore les afficher :
        // $totalVisits = (clone $base)->count();
        // $todayVisits = (clone $base)->whereDate('visited_at', $today)->count();
        // $weekVisits  = (clone $base)->whereBetween('visited_at', [$startOfWeek, $endOfWeek])->count();

        $postsCount    = Post::count();
        $studentsCount = Student::count();

        // Série 7 jours — IP UNIQUES / jour
        $from = $today->copy()->subDays(6);
        $rows = (clone $base)
            ->selectRaw('DATE(visited_at) as d, COUNT(DISTINCT ip) as uniques')
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
            'uniqueTotal','uniqueToday','uniqueWeek',
            'postsCount','studentsCount','series'
            // , 'totalVisits','todayVisits','weekVisits' // si tu veux les hits
        ));
    }
}
