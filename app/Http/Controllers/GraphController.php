<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
    public function graphList()
    {
        //ユーザidからスコアの履歴を取得
        $user_id = Auth::id();
        $score = Score::with(['players'])->where('user_id',$user_id)->get();
        return view('player-list', compact('score'));
    }
}
