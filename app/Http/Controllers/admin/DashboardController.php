<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use App\Models\Post;
use App\Models\Student;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
  public function index()
  {
    $totalVisits   = Visit::count();
    $todayVisits   = Visit::whereDate('visited_at', now())->count();
    $weekVisits    = Visit::whereBetween('visited_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
    $postsCount    = Post::count();
    $studentsCount = Student::count();

    $series = [];
    for ($i=6; $i>=0; $i--) {
      $day = Carbon::today()->subDays($i);
      $series[] = ['label'=>$day->format('d/m'), 'count'=>Visit::whereDate('visited_at',$day)->count()];
    }

    return view('admin.dashboard', compact('totalVisits','todayVisits','weekVisits','postsCount','studentsCount','series'));
  }
}
