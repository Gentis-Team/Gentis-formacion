<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Courses::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courses = new Courses();

        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'mail' => 'required',
            'expiration_date' => 'required',
            'schedules' => 'required',
            'modality' => 'required',
            'description' => 'required',
        ]);

        $courses->title = $request->title;
        $courses->duration = $request->duration;
        $courses->location = $request->location;
        $courses->phone = $request->phone;
        $courses->mail = $request->mail;
        $courses->expiration_date = $request->expiration_date;
        $courses->schedules = $request->schedules;
        $courses->modality = $request->modality;
        $courses->description = $request->description;
        
        $courses->save();

        return $courses;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        return $courses;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $courses)
    {
        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'mail' => 'required',
            'expiration_date' => 'required',
            'schedules' => 'required',
            'modality' => 'required',
            'description' => 'required',
        ]);

        $courses->title = $request->courses;
        $courses->duration = $request->duration;
        $courses->location = $request->location;
        $courses->phone = $request->phone;
        $courses->mail = $request->mail;
        $courses->expiration_date = $request->expiration_date;
        $courses->schedules = $request->schedules;
        $courses->modality = $request->modality;
        $courses->description = $request->description;
        
        $courses->update();

        return $courses;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        if(is_null($courses)){
            
            return response()->json('No s\'ha pogut realitzar la petició, l\'arxiu ja no existeix.', 404);
        }

        $courses->delete();


        return response()->noContent();
    }
}
