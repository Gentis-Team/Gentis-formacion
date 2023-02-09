<?php

namespace App\Http\Controllers;

use App\Models\Requirements;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequirementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Requirements::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requirements = new Requirements();

        $request->validate([
            'title' => 'required',
            // 'graduate' => 'required',
        ]);

        $requirements->title = $request->title;
        $requirements->graduate = $request->graduate;
        $requirements->description = $request->description;

        $requirements->save();

        return $requirements;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requirements  $requirements
     * @return \Illuminate\Http\Response
     */
    public function show(Requirements $requirements)
    {
        return $requirements;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requirements  $requirements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requirements $requirements)
    {
        $request->validate([
            'text' => 'required',
            // 'graduate' => 'required',
        ]);

        $requirements->title = $request->title;
        $requirements->graduate = $request->graduate;
        $requirements->description = $request->description;

        $requirements->update();

        return $requirements;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requirements  $requirements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requirements $requirements)
    {
        if(is_null($requirements)){
            
            return response()->json('No se pudo realizar la petición, el archivo ya no existe', 404);
        }

        $requirements->delete();


        return response()->noContent();
    }
}
