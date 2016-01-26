<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    
    public function businesses() {
        return $this->hasMany('App\Business');
    }
}
