<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Player;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ScoreController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            for ($i = 0; $i < 3;$i++) {
                //プレイヤーテーブルに保存
                $player = new Player($request->get('player', [
                        'name' => $request->score['name'][$i]
                    ]));
                $player->save();

                //$playerから登録中のidが取得可能
                //利用してuser_idに出力して紐付ける
                //レコードテーブルに保存
                $record = new Record($request->get('record', [
                        'player_id' => $player->id,
                        'position' => $request->score['position'][$i],
                        'point' => $request->score['point'][$i]
                    ]));
                $record->save();
            }
        } catch (Exception $e) {
            DB::rollback();
            return back()->withInput();
        }
        DB::commit();
        return view('index');
    }

    public function scoreHistory(Request $request)
    {
        $user_id = Auth::id();
        $score = Score::where('user_id', $user_id)->get();
        return view('score-history', compact('score'));
    }
}
