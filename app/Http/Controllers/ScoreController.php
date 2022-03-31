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
            $record = new Record();
            $player = new Player();
            $player->name = $request->score['name'][$i];
            $record->player_id = $i;
            $record->position = $request->score['position'][$i];
            $record->point = $request->score['point'][$i];
            $player->save();
            $record->save();
        }

        return view('dashboard');
    }
}
