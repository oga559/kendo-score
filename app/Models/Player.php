<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'players';

    //可変項目
    protected $fillable = [
        'user_id',
	    'name',
        'created_at',
        'updated_at'
    ];

    public function scores()
    {
        //アルファベット順でモデルを結合するので、第二引数で命名した
        return $this->belongsToMany(Score::class,'score_player');
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
