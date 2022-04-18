<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;


class GraphController extends Controller
{
    public function playerList()
    {
        //ユーザidからスコアの履歴を取得
        $user_id = Auth::id();
        $score = Score::with(['players'])->where('user_id',$user_id)->get();
        return view('player-list', compact('score'));
    }

    public function graph($player_id)
    {
        $score = Record::where('player_id', '=', $player_id)->get();
        dd($score);
        return view('history-detail', compact('score'));
    }
}
