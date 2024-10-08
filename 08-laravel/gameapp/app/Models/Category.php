<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document',
        'image',
        'manufacturer',
        'releasedate',
        'description',
    ];

    //Relationship: Category has many games
    public function games(){
        return $this->hasMany('App\Models\Game');
    }

    public function scopeNames($categories, $q){
        if (trim($q)){
            $categories->where('name', 'LIKE', "%$q%")
            ->orwhere('manufacturer', 'LIKE', "%$q%");
        }
    }
}
