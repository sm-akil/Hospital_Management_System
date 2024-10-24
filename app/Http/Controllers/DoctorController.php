<?php

namespace App\Http\Controllers;

use App\doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new doctor;
        $res->fname=$request->input('fname');
        $res-> lname = $request->input('lname');
        $res-> date_of_birth = $request->input('date_of_birth');
        $res-> gender = $request->input('gender');
        $res-> speciality = $request->input('speciality');
        $res-> phone_number = $request->input('phone_number');
        $res-> email = $request->input('email');
        $res-> address = $request->input('address');
        $res-> created_at = $request->input('created_at');
        $res-> updated_at = $request->input('updated_at');
        $res-> save();

     $request->session()->flash('msg','Data Submitted');
     return redirect('doctor_show'); 
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(doctor $doctor)
    {
        return view('doctor_show')->with('doctroarr', doctor::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor $doctor, $id)
    {
        return view('doctor_update')->with('doctroarr', doctor::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doctor $doctor)
    {
        $res = doctor::find($request->id);
        $res->fname=$request->input('fname');
        $res-> lname = $request->input('lname');
        $res-> date_of_birth = $request->input('date_of_birth');
        $res-> gender = $request->input('gender');
        $res-> speciality = $request->input('speciality');
        $res-> phone_number = $request->input('phone_number');
        $res-> email = $request->input('email');
        $res-> address = $request->input('address');
        $res-> created_at = $request->input('created_at');
        $res-> updated_at = $request->input('updated_at');
        $res-> save();

        $request->session()->flash('msg','Data updated');
        return redirect('doctor_show'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctor $doctor, $id)
    {
        doctor::destroy(array('id', $id));
        return redirect('doctor_show'); 
    }
}
