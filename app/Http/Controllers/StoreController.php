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
        $products = DB::select('SELECT t1.id, t1.name, t1.slug, t1.price, t1.identifier, DATEDIFF(NOW(), t1.created_at) as create_at, t3.name as category , t2.img1 FROM products t1 LEFT JOIN images t2 ON t1.id = t2.product_id LEFT JOIN categories t3 ON t1.category_id = t3.id');
        //dd($products);
        //return view('store.index', compact($products));
        return view('store.index')->with('products', $products);
    }

    public function show($identifier, $slug)
    {
        $product = DB::select('SELECT t1.*, t3.name AS category FROM products t1 LEFT JOIN categories t3 ON t1.category_id = t3.id WHERE t1.identifier = 1538939888');
        $images  = DB::select('SELECT t1.identifier ,t2.* FROM images t2 LEFT JOIN products t1 ON t1.id = t2.product_id WHERE t1.identifier = 1538939888');
        //dd($product);
        return view('store.show')->with('product', $product)->with('images', $images);

    }
}
