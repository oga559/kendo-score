<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Player;
use App\Models\Record;


class ScoreController extends Controller
{
    public function store(Request $request){

        for($i = 0; $i < 3; $i++){
            $player = new Record();
            $player->player_id = $i;
            $player->position = $request->score['position'][$i];
            $player->point = $request->score['point'][$i];
            $player->save();
        }

        return view('dashboard');
    }
}
