<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ServiceUpdateRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = service::get();
        return view('backend.modules.service.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.modules.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model =new Service();
        $model->title = $request->title;
        $model->description = $request->description;
        $model->icon = $request->icon;

        $model->save();
        return redirect(route('service.index'));
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
        $model = Service::find($id);
        return view('backend.modules.service.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceUpdateRequest $request, string $id)
    {
       $model = Service:: find($id);
       $model->title = $request->title;
       $model->description = $request->description;
       $model->icon = $request->icon;

       $model->save();
       return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $model = Service::find($id);
        $model->delete();
        return back();
    }
}
