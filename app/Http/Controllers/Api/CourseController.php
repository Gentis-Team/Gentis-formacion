<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with(['categories', 'groups', 'requirements', 'center'])->get();

        return response()->json([
            'status' => true,
            'courses' => $courses,
        ]);

        /* $validatedData = $request->validate([
            'title' => ['required'],
            'fetchCached' => ['boolean'],
        ]);

        $fetchCached = $validatedData['fetchCached'];
        $title = $validatedData['title'];

        if ($fetchCached) {
            return $this->fetchFromCache($title);
        } else {
            return $this->fetchFromDB($title);
        } */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {
        $course = Course::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Course Created successfully!",
            'course' => $course
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCourseRequest $request, Course $course)
    {
        $course->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Course Updated successfully!",
            'course' => $course
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return response()->json([
            'status' => true,
            'message' => "Course Deleted successfully!",
        ], 200);
    }
}
