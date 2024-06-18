<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'image',
        'developer',
        'releasedate',
        'category_id',
        'user_id',
        'price',
        'genre',
        'slider',
        'description',
    ];

     //Relationship: Games belongs to user
     public function user(){
        return $this->belongsTo('App\Models\User');
    }

     //Relationship: Games belongs to category
     public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    //Relationship: Games belongs to collection
    public function collection(){
        return $this->belongsTo('App\Models\Collection');
    }

    
}
