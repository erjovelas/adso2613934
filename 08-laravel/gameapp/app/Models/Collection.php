<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'user_id'
    ];

    //Relationship: Collection belongs to user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

     //Relationship: Collection belongs to game
     public function game(){
        return $this->belongsTo('App\Models\Game');
    }
}
