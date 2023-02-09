<?php

namespace App\Http\Controllers;

use App\Models\Collective;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Collective::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collective = new Collective();

        $request->validate([
            'name'=>'required',
        ]);

        $collective->name = $request->name;

        $collective->save();

        return $collective;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collective  $collective
     * @return \Illuminate\Http\Response
     */
    public function show(Collective $collective)
    {
        return $collective;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collective  $collective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collective $collective)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $collective->name = $request->name;

        $collective->update();

        return $collective;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collective  $collective
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collective $collective)
    {
        if(is_null($collective)){
            
            return response()->json('No s\'ha pogut realitzar la petició, l\'arxiu ja no existeix..', 404);
        }
        
        $collective->delete();

        return response()->noContent();
    }
}
