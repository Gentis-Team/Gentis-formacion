<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Categories::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Categories();

        $request->validate([
            'name' => 'required',
        ]);

        $categories->name = $request->name;

        $categories->save();

        return $categories;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        return $categories;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $categories->name = $request->name;

        $categories->update();
        
        return $categories;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        if(is_null($categories)){
            
            return response()->json('No se pudo realizar la petición, el archivo ya no existe', 404);
        }

        $categories->delete();


        return response()->noContent();
        
    }
}
