<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\SliderUpdateRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $models= slider::get();
       return view('backend.modules.slider.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.modules.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model= New Slider();
        $model->title = $request->title;
        $model->description = $request->description;
        $model->read_more = $request->read_more;
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $imageNamed = uniqid().$image->getClientOriginalExtension();
            $filepath = $image->move('assets/slider',$imageNamed);
            $model->image = $filepath;
        }
        $model->save();
        return redirect(route('slider.index'));
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
        $model = Slider::find($id);
        return view('backend.modules.slider.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderUpdateRequest $request, string $id)
    {
        $model = Slider::find($id);
        
        $model->title = $request->title;
        $model->description = $request->description;
        $model->read_more = $request->read_more;
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $imageNamed = uniqid().$image->getClientOriginalExtension();
            $filepath = $image->move('assets/slider',$imageNamed);
            $model->image = $filepath;
        }
        $model->save();

        return redirect(route('slider.index'));    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $model = Slider::find($id);
        $model->delete();
        return back();
    }
}
