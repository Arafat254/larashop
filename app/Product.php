<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function subcategory()
    {
    	return $this->belongsTo('App\Subcategory');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Productimages');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
