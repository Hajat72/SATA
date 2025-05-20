<?php

namespace App\Models;

use App\Models\Admission;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function admission() {
        return $this->belongsTo(Admission::class);
    }
}
