<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCoursesRequest;
use App\Models\Courses;
use App\Http\Requests\UpdateCoursesRequest;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::all();
        return view ('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoursesRequest $request)
    {
        $input = $request->all();
        Courses::create($input);
        return redirect('courses')->with('flash_message', 'Courses Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $courses = Courses::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $courses = Courses::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoursesRequest $request, String $id)
    {
        $courses = Courses::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'courses Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Courses::destroy($id);
        return redirect('courses')->with('flash_message', 'Courses deleted!');
    }
}
