<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','code','name','price',
    ];


    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
