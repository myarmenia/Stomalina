<?php
namespace App\Services;
use App\Models\Doctor\Doctor;
use App\Services\FileUploadService;

class DoctorService
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  array|object  $data
     * @return Doctor
     */
    public function store(array|object $data)
    {   
       $new = Doctor::create(collect($data)->except(['avatar'])->toArray());

       if(isset($data['avatar']))
       {
        $path = FileUploadService::upload($data['avatar'],"doctors/$new->id");
        $new->avatar = $path;
        $new->save();
       } 

       if(isset($data['education']))
       {
         foreach($data['education'] as $educ)   
         {
            $new->education()->create($educ);
         }
       }

       if(isset($data['training']))
       {
         foreach($data['training'] as $train)   
         {
            $new->training()->create([...$train,'type'=>'training']);
         }
       }
       
       return $new;
    }   
   
}
