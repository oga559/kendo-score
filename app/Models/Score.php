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
        'created_at',
        'updated_at'
    ];


}
