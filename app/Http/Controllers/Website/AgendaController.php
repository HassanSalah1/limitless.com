<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameReference;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public $game;
    public $game_reference;
    public function __construct()
    {
        $this->game_reference = new GameReference();
        $this->game = new Game();
    }
    public function index(Request $request)
    {
        $user = getCurrentUser();
        $games = $this->game_reference->getWithGameAndUser($user->user_code);

        return view('website.agenda',compact('games'));

    }

    public function join(Request $request)
    {

        $user = getCurrentUser();

        $user->update(['join_club' => $request->join]);
        //$user->save();
        if ($request->join === "Yes"){
            $message = "Thank you for your trust,  you will receive shortly your code to access your personal space.";
        }else{
            $message = "Thank you for your interest, you can join our club anytime by contacting one of Limitless Team.";
        }
        return redirect()->to('/agenda/#agenda')->with('message', $message);
    }
}
