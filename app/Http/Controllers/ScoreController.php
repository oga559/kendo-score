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
    public function scoreCreate()
    {
        //ユーザidからスコアの履歴を取得
        $user_id = Auth::id();
        $user_player = Score::where('user_id', $user_id)->with(['players'])->get();
        $player = [];
        foreach ($user_player as $user_players) {
            $player[] = $user_players;
        }

        return view('score-create', compact('player'));
    }

    //スコアを保存する
    public function store(Request $request)
    {
        //トランザクション化
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
                $player = new Player();
                if(isset($request->score['player_id'][$i])){
                    $player = Player::find($request->score['player_id'][$i]);
                    $player->scores()->attach($score->id);
                    continue;
                }
                $player->name = $request->score['name'][$i];
                $player->save();


                //$playerから登録中のidが取得可能
                //利用してuser_idに出力して紐付ける
                //レコードテーブルに保存
                $record = new Record();
                if(isset($request->score['player_id'][$i])){
                    $record->player_id = $request->score['player_id'][$i];
                }else{
                    $record->player_id = $player->id;
                }
                $record->position = $request->score['position'][$i];
                $record->first_point = $request->score['first_point'][$i];
                $record->second_point = $request->score['second_point'][$i];
                $record->third_point = $request->score['third_point'][$i];
                $record->save();

                $player = Player::find($player->id);
                $player->scores()->attach($score->id);
            }
        //エラーがあったらロールバック
        } catch (Exception $e) {
            DB::rollback();
        }
        DB::commit();
        return view('index');
    }
}
