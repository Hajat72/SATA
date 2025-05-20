<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseUpdateRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Course::get();
        return view('backend.modules.course.index'.compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.modules.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $model = new Course();
        $model->name = $request->name;
        $model->code = $request->code;

        $model->sava();
        return redirect(route('course.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Course ::find($id);
        return view('backend.modules.course.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseUpdateRequest $request, string $id)
    {
        $model = Course:: find($id);
        $model->name = $request->name;
        $model->code = $request->code;

        $model->sava();
        return redirect(route('course.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $model = Course::find($id);
        $model->delete();
        return back();
    }
}
