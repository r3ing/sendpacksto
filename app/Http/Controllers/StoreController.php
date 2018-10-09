<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function index()
    {
        //$products = Product::all();
        //$products = DB::select('SELECT t1.*, t2.img1 FROM products t1 LEFT JOIN images t2 ON t1.id = t2.product_id');
        $products = DB::select('SELECT t1.id, t1.name, t1.slug, t1.price, t1.identifier, t1.created_at, t3.name as category , t2.img1 FROM products t1 LEFT JOIN images t2 ON t1.id = t2.product_id LEFT JOIN categories t3 ON t1.category_id = t3.id');
        //dd($products);
        //return view('store.index', compact($products));
        return view('store.index')->with('products', $products);
    }

    public function show($id, $slug)
    {
        $product = DB::select('SELECT t1.*, t3.name as category FROM products t1 LEFT JOIN categories t3 ON t1.category_id = t3.id');
        $images  = DB::select('SELECT t1.* FROM images t1 WHERE t1.product_id = '.$id);

        return view('store.show')->with('product', $product)->with('images', $images);

    }
}
