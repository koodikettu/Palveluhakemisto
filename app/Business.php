<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model {

    protected $fillable = [
        'name',
        'category_id',
        'streetAddress',
        'zipCode',
        'city',
        'phone',
        'website',
        'latitude',
        'longitude'
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }

}
