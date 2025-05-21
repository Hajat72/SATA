<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdmissionRequest;
use App\Http\Requests\AdmissionUpdateRequest;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('admission')->where('status' , 0)->get();
        return view('backend.modules.admission.index',compact('students'));
    }


    public function getAcceptedStudentList()
    {
        $students = Student::with('admission')->where('status', 1)->get();
        return view('backend.modules.admission.accepted',compact('students'));
    }

      public function getRejectedStudentList()
    {
        $students = Student::with('admission')->where('status' , 2)->get();
        return view('backend.modules.admission.rejected',compact('students'));
    }
    /**
     * 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.modules.admission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdmissionRequest $request)
    {
        try {
        DB::beginTransaction();
        
        // Admission Data
        $admission = new Admission();
        $admission->course = $request->course;
        $admission->session = $request->session;
        $admission->save();

        //Student Data
        $student =new Student();
        $student->admission_id = $admission->id;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->phone = $request->phone;

        $student->save();
        DB::commit();
        return redirect()->route('admission.index')->with('success', 'Application Submitted Successfully!');
        
       }
       catch(\Exception $e) {
        DB::rollBack();

        return redirect()->back()->with('error', 'Something went wrong! ' . $e->getMessage());
       }
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
        $student = Student::with('admission')->find($id);
        return view('backend.modules.admission.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdmissionUpdateRequest $request, string $id)
    {
      

        try {
            DB::beginTransaction();
            
            // Admission Data
            $admission = Admission:: find($id);
            $admission->course = $request->course;
            $admission->session = $request->session;
            $admission->save();
    
            //Student Data
            $student = Student::find($id);
            $student->admission_id = $admission->id;
            $student->name = $request->name;
            $student->email = $request->email;
            $student->address = $request->address;
            $student->phone = $request->phone;
    
            $student->save();
            
    
            DB::commit();
            return redirect()->route('admission.index')->with('success', 'Application Submitted Successfully!');
    
           }
           catch(\Exception $e) {
            DB::rollBack();
    
            return redirect()->back()->with('error', 'Something went wrong! ' . $e->getMessage());
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $student = Student::with('admission')->find($id);
        $student->delete();
        return back();
    }
}
