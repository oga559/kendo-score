<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ScoreHistoryController extends Controller
{
    public function scoreHistory()
    {
        //ユーザidからスコアの履歴を取得
        $user_id = Auth::id();
        $score = Score::where('user_id', $user_id)->get();
        return view('score-history', compact('score'));
    }

    public function detail($score_id)
    {
        $score = Score::with(['players.records'])->find($score_id);
        return view('history-detail', compact('score'));
    }
}
