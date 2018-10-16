<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);//DB::table('categories')->paginate(10);//Category::all()->paginate(2);
        //dd($categories);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //return $request->all();
        //$this->validate($request, [
          //  'name' => 'required|unique:categories|max:255'
        //]);

        $category = Category::create([
            'name' => $request->get('name'),
            'slug' => str_slug($request->get('name')),
            'description' => $request->get('description')
        ]);

        if($category)
            flash('Categor&iacutea agregada con exito!')->success();
        else
            flash('La Categor&iacutea NO pudo agregarse!')->error();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->fill($request->all());
        $category->slug = str_slug($request->get('name'));

        $updated = $category->save();

        if($updated)
            flash('Categor&iacutea actualizada correctamente!')->success();
        else
            flash('La Categor&iacutea NO pudo actualizarse!')->error();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $deleted = $category->delete();

        if($deleted)
            flash('Categor&iacutea eliminada correctamente!!')->success();
        else
            flash('La Categor&iacutea NO pudo eliminarse!')->error();

        return redirect()->route('category.index');
        //*/
        //dd($category);
    }

}
