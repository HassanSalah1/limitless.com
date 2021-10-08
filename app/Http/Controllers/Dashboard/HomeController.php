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
        $registrations = Registration::get();
        $registrationsAttend = $registrations->where('is_attend', 1);
        $games = Game::get();
        $surveys = Survey::get();
        if ($request->ajax()) {
             if ($request->event){

                 $event = $request->event;
                 $eventRegistrations = $registrations->where('venue',$event);
                 $usersCodes = $eventRegistrations->pluck('user_code');
                 $usersIds = $eventRegistrations->pluck('id');
                 $eventRegistrationsAttend = $eventRegistrations->where('is_attend', 1);
                 $data = [
                     'registrations' => $eventRegistrations->count(),
                     'games' => $games->whereIn('user_code', $usersCodes)->count(),
                     'surveys' => $surveys->whereIn('registration_id', $usersIds)->count(),
                     'registrationsAttend' => $eventRegistrationsAttend->count()
                 ];
                 return response()->json($data);
             }
            $data = [
                'registrations' => $registrations->count(),
                'games' => $games->count(),
                'surveys' => $surveys->count(),
                'registrationsAttend' => $registrationsAttend->count()
            ];
            return response()->json($data);
        }
        return view('dashboard.home', compact('registrations', 'registrationsAttend', 'games', 'surveys'));
    }
}
