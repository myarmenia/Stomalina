<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor\Doctor;
use App\Services\DoctorService;

class DoctorController extends Controller
{
    /**
     * Create a new DoctorService instance.
     *
     * @var DoctorService $doctorServ
     */
    protected $doctorServ;

     /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->doctorServ = new DoctorService();
    }
    /**
     * Doctor lists.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $datas = Doctor::where('status',1)->paginate(5);
        return view('admin.doctors.index',compact('datas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctors.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:200',
            'middlename' => 'required|string|min:2|max:200',
            'surname' => 'required|string|min:2|max:200',
            'job_title' => 'nullable',
            'avatar' => 'nullable|image',
            'education.*' => 'nullable',
            'training.*' => 'nullable',
        ]);

        
        $created = $this->doctorServ->store($validated);
        
        return redirect()->back()->with('message','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        $doctor->load(['training','education']);
        return view('doctors.show',compact('doctor'));

    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('admin.doctors.edit',compact('doctor'));

    }

    /**
     * Delete doctor.
     *
     * @param  Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->back()->with('message','успех');
    }
}
