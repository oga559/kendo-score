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
            //スコアテーブルに保存
            $score = new Score();
            $score->user_id = Auth::id();
            $score->game_name = $request->game_name;
            $score->game_day = $request->game_day;
            $score->save();


            for ($i = 0; $i < 10;$i++) {
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
                        'first_point' => $request->score['first_point'][$i]
                    ]));
                $record->save();

                $player = Player::find($player->id);
                $player->scores()->attach($score->id);
            }
        } catch (Exception $e) {
            DB::rollback();
            return back()->withInput();
        }
        DB::commit();
        return view('index');
    }
}
