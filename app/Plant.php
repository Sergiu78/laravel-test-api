<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{

    protected $fillable = ['plant', 'description', 'country', 'family'];

    public function countries() 
    {
        return $this->hasMany(Country::class, 'plant_id', 'country');
    }

     public function families() 
     {
         return $this->belongsTo(Family::class, 'family', 'id');
        
     }
}
