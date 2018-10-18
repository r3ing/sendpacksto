<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'slug', 'description', 'extract', 'price', 'weight', 'visible', 'identifier', 'category_id'];

    // Relation with Category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // Relation with Image
    public function images()
    {
        return $this->hasOne('App\Image');
    }
}
