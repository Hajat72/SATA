<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
  

    public function admissionAcceptedStatus($id)
    {
        $model =   Admission::find($id);
        $model->status = 1;
        $model->save();
        return back();
    }

    public function admissionRejectedStatus($id)
    {
        $model = Admission::find($id);
        $model->status =  2;
        $model->save();
        return back();
    }
}
