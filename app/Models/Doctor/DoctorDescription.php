<?php

namespace App\Models\Doctor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDescription extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['doctor_id','desc','date','type'];
}
