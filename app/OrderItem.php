<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model {

    protected $table = 'order_items';
    protected $fillable = ['price', 'quantity', 'product_id', 'order_id'];

    // Relation with Order
    public function order() {
        return $this->belongsTo('App\Order');
    }

    // Relation with Product
    public function product() {
        return $this->belongsTo('App\Product');
    }

}
