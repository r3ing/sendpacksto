<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Image;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(20);
        $products->each(function($products){
            $products->category;
            $products->images;
        });

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //Files
        $identifier = time();
        $path = public_path().'\uploads\products'.'\\'.$identifier;
        $price = empty($request->get('price')) ? 1 : $request->get('price');
        $weight = empty($request->get('weight')) ? 0 : $request->get('weight');

        $data = [
            'name'          => $request->get('name'),
            'slug'          => str_slug($request->get('name')),
            'description'   => $request->get('description'),
            'extract'       => $request->get('extract'),
            'price'         => $price,
            'weight'        => $weight,
            'visible'       => $request->has('visible') ? 1 : 0,
            'identifier'    => $identifier,
            'category_id'   => $request->get('category_id')
        ];

        //dd($data);
        $product = Product::create($data);

        if($request->file('img1')){
            $img1 = $request->file('img1');
            $img1_name = 'img_'.time().'.'.$img1->getClientOriginalExtension();
            $img1->move($path, $img1_name);
        }
        if($request->file('img2')){
            $img2 = $request->file('img2');
            $img2_name = 'img_'.(time()+5).'.'.$img2->getClientOriginalExtension();
            $img2->move($path, $img2_name);
        }
        if($request->file('img3')){
            $img3 = $request->file('img3');
            $img3_name = 'img_'.(time()+10).'.'.$img3->getClientOriginalExtension();
            $img3->move($path, $img3_name);
        }
        if($request->file('img4')){
            $img4 = $request->file('img4');
            $img4_name = 'img_'.(time()+15).'.'.$img4->getClientOriginalExtension();
            $img4->move($path, $img4_name);
        }
        if($request->file('img5')){
            $img5 = $request->file('img5');
            $img5_name = 'img_'.(time()+20).'.'.$img5->getClientOriginalExtension();
            $img5->move($path, $img5_name);
        }

        $images = new Image();
        if(isset($img1_name))
            $images->img1 = $img1_name;
        if(isset($img2_name))
            $images->img2 = $img2_name;
        if(isset($img3_name))
            $images->img3 = $img3_name;
        if(isset($img4_name))
            $images->img4 = $img4_name;
        if(isset($img5_name))
            $images->img5 = $img5_name;
        $images->product()->associate($product);
        if($images->save()){
            $saved = true;
        }
        if($product && $saved)
            flash('Producto agregado con exito!')->success();
        else
            flash('El Producto NO pudo agregarse!')->error();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('id', 'asc')->pluck('name', 'id');
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->fill($request->all());
        $product->slug = str_slug($request->get('name'));
        $product->visible = $request->has('visible') ? 1 : 0;

        $updated = $product->save();

        if($updated)
            flash('Producto actualizado correctamente!')->success();
        else
            flash('El Producto NO pudo actualizarse!')->error();

        return redirect()->route('product.index');
        //editar imagenes del producto
        //dd($product->images->img1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $deleted = $product->delete();

        if($deleted) {
            Storage::deleteDirectory(public_path().'\uploads\products'.'\\'.$product->identifier);
            flash('Producto eliminado correctamente!!')->success();
        }
        else
            flash('El Producto NO pudo eliminarse!')->error();

        return redirect()->route('product.index');
    }
}
