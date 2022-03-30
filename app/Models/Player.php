<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'player';

    //可変項目
    protected $fillable = [
        'user_id',
	    'name',
        'created_at',
        'updated_at'
    ];
}
