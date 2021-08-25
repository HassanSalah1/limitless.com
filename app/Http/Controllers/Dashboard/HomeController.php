<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Registration;
use App\Models\Survey;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return View|JsonResponse
     */
    public function index(Request $request)
    {
        $registrations = Registration::count();
        $games = Game::count();
        $surveys = Survey::count();
        $registrationsAttend = Registration::where('is_attend', 1)->count();
        if ($request->ajax()) {
            $data = [
                'registrations' => $registrations,
                'games' => $games,
                'surveys' => $surveys,
                'registrationsAttend' => $registrationsAttend
            ];
            return response()->json($data);
        }
        return view('dashboard.home', compact('registrations', 'registrationsAttend', 'games', 'surveys'));
    }
}
