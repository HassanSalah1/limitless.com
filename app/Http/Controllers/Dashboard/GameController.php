<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Models\Game;
use App\Models\GameReference;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GameController extends Controller
{
    public  $game ;
    public function __construct()
    {
        $this->game = new Game();
        $this->middleware('auth')->except(['store', 'getGame']);
    }


    public function index()
    {
        $games = $this->game->getAll();
        return  view('dashboard.games.index',compact('games'));
    }


    public function store(GameRequest $request)
    {

        try {
            DB::beginTransaction();

            $this->game->create(['code'=>$request->gameCode,'user_code'=>$request->userCode,'score'=>$request->gameScore]);

            DB::commit();

        } catch (Exception $e) {

            DB::rollBack();

            Log::error($e->getMessage());

            return response()->json(['error' => 'data not save'], 409);
        }

        return response()->json(['message','data saved.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $code
     * @return JsonResponse
     */
    public function getGame($code): JsonResponse
    {

        try {
            $game = GameReference::where('code' , $code)->first();
            if (!$game){
                return response()->json(['message' => 'Game not found']);
            }
            //$games = $this->game::where('code', $code)->get();

            $mapGames = collect($game->games)->groupBy('user_code')->map(function ($map) {
                return [
                    'name' => $map->first()->user->first()->full_name,
                    'score' => $map->sum('score')
                ];
            });
            $sortScores = collect($mapGames)->sortByDesc('score')->toArray();

            return  response()->json(['data' => array_values($sortScores)]);

        } catch (Exception $e) {

            DB::rollBack();

            Log::error($e->getMessage());

            return response()->json(['error' => 'data not save'], 409);
        }

        return response()->json(['message','Code not found']);
    }


}
