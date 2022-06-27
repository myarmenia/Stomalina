<?php

namespace App\Models\Doctor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'middlename',
        'surname',    
        'job_title',
        'avatar',
        'status'
    ];

    public function descriptions()
    {
        return $this->hasMany(DoctorDescription::class);
    }

    public function education()
    {
        return $this->descriptions()->where('type','education');
    }

    public function training()
    {
        return $this->descriptions()->where('type','training');
    }

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->surname . ' ' . $this->middlename;
    }
}
