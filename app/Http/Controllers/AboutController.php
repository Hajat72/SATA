<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;
use App\Http\Requests\AboutUpdateRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = about::get();
        return view('backend.modules.about.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.modules.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new About();
        $model->title = $request->title;
        $model->sub_title = $request->sub_title;
        $model->description = $request->description;
        $model->icon = $request->icon;
        
        $model->save();
        return redirect(route('about.index'));
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
        $model = about::find($id);
        return view('backend.modules.about.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUpdateRequest $request, string $id)
    {
        $model = About::find($id);
        $model->title = $request->title;
        $model->sub_title = $request->sub_title;
        $model->description = $request->description;
        $model->icon = $request->icon;
        
        $model->save();
        return redirect(route('about.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $model= About::find($id);
        $model->delete();
        return back();
    }
}
