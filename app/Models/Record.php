<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $table = 'records';

    //可変項目
    protected $fillable = [
        'user_id',
        'position',
        'point',
        'created_at',
        'updated_at'
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
