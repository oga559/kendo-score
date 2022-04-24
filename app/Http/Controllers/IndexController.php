<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Score;

class IndexController extends Controller
{
    public function index()
    {
        //ユーザidからスコアの履歴を取得
        $user_id = Auth::id();
        $score = Score::with(['players'])->where('user_id',$user_id)->get();
        return view('index', compact('score'));
    }
}
