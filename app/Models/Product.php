<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $primaryKey = 'id';
    public function images()
    {
        return $this->hasMany('App\Models\ProductPicture');
    }    
}
