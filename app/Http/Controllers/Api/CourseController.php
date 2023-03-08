<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterCourseRequest;
use App\Http\Requests\StoreCourseRequest;
use App\Models\Center;
use App\Models\Course;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show', 'filter']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with(['categories', 'groups', 'requirements', 'center', 'users'])->get();

        return response()->json([
            'status' => true,
            'courses' => $courses,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::with(['categories', 'groups', 'requirements', 'center', 'users'])->find($id);

        return response()->json([
            'status' => true,
            'course' => $course,
        ]);
    }

    /**
     * Display a filtered listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $courses = Course::with(['categories', 'groups', 'requirements', 'center'])->get();

        return response()->json([
            'status' => true,
            'courses' => $courses,
            'filters' => $request->all(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {
        $course = Course::create([
            'code' => $request->code,
            'name' => $request->name,
            'duration_theory' => $request->duration_theory,
            'duration_practice' => $request->duration_practice,
            'description' => $request->description,
        ]
    );

        $course->categories()->attach([
            $request->categories
        ]);
        $location = Location::find($request->location);
        $center = Center::where('location_id', $location->id)->first();
        $center->courses()->save($course);
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->courses()->attach([
            $course->id
        ]);

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
