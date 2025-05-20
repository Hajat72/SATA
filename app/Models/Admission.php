<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use SebastianBergmann\CodeCoverage\Report\Xml\BuildInformation;

class Admission extends Model
{
    public function student(){
        return $this->hasMany(Student::class);
    }

    // Scope of Admissiom Status 
public function scopeOfPending(Builder $query)
{
    return $query->where('status', 0);
}

public function scopOfApproved(Builder $query){
    return $query->where('status', 1);
}


public function scopeOfRejected(Builder $query){
    return $query->where('status', 2);
}
}
