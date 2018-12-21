<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name' , 
        'cpu' , 
        'slug' ,
        'ram' ,
        'vote_count' ,
        'hard_drive'  ,
        'screen_size' ,
        'gpu' ,
        'price' , 
        'inventory' ,
        'description'  ,
        'type'  ,
        'color'  ,
        'category_id'  ,
        'brand_id'  ,
        'image1' ,
        'image2' ,
        'image3' ,
        'image4' ,
    ];
}
