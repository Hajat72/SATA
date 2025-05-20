<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicSession;
use App\Http\Controllers\Controller;
use App\Http\Requests\AcademicSessionRequest;
use App\Http\Requests\AcademicSessionUpdateRequest;

class AcademicSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = AcademicSession::get();
        return view('backend.modules.academic_session.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.modules.academic_session.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AcademicSessionRequest $request)
    {
        $model = new AcademicSession();
        $model->name = $request->name;
        $model->code =  $request->code;

        $model->save();
        return redirect(route('academic_session'));
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
        $model = AcademicSession::find($id);
        return view('backend.modules.academic_session.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AcademicSessionUpdateRequest $request, string $id)
    {
        $model = AcademicSession:: find($id);
        $model->name = $request->name;
        $model->code =  $request->code;

        $model->save();
        return redirect(route('academic_session'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $model = AcademicSession::find($id);
        $model->delete();
        return back();
    }
}
