<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
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
        $record1 = Record::where('player_id',$player_id)->where('first_point', '=', 1)->get()->count();
        $record2 = Record::where('player_id',$player_id)->where('second_point', '=', 1)->get()->count();
        $record3 = Record::where('player_id',$player_id)->where('third_point', '=', 1)->get()->count();
        $graph = Record::where('player_id',$player_id)->get();
        $i = 0;
        $point_array = ['first_point','second_point','third_point'];
        $men = 0;
        $kote = 0;
        $dou = 0;

        //今まで取った面、小手、胴を取得
        for($i=1; $i<=3;$i++){
            for($k=0; $k<=2;$k++){
                if($i === 1){
                    $men += Record::where('player_id',$player_id)->where($point_array[$k], '=', $i)->get()->count();
                }
                if($i === 2){
                    $kote += Record::where('player_id',$player_id)->where($point_array[$k], '=', $i)->get()->count();
                }
                if($i === 3){
                    $dou += Record::where('player_id',$player_id)->where($point_array[$k], '=', $i)->get()->count();
                }
            }
        }

        return view('graph', compact('men','kote','dou'));
    }
}
