<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    public $timestamps = false;
    //テーブル名
    protected $table = 'scores';

    //可変項目
    protected $fillable = [
	    'user_id',
        'game_name',
        'game_day',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function players()
    {
        //アルファベット順でモデルを結合するので、第二引数で命名した
        return $this->belongsToMany(Player::class,'score_player');
    }

}
