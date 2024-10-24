<?php

namespace App\Http\Controllers;

use App\patient;
use Illuminate\Http\Request;
use DB;

class PatientController extends Controller
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
        return view('patient_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new patient;
        $res->fname=$request->input('fname');
        $res-> lname = $request->input('lname');
        $res-> phone_number = $request->input('phone_number');
        $res-> age = $request->input('age');
        $res-> gender = $request->input('gender');
        $res-> description = $request->input('description');
        $res-> email = $request->input('email');
        $res-> address = $request->input('address');
        $res-> created_at = $request->input('created_at');
        $res-> updated_at = $request->input('updated_at');
        $res-> save();

     $request->session()->flash('msg','Data Submitted');
     return redirect('patient_show'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(patient $patient)
    {
        return view('patient_show')->with('patient_arr', patient::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(patient $patient, $id)
    {
         return view('patient_update')->with('patient_arr', patient::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, patient $patient)
    {
        $res = patient::find($request->id);
        $res->fname=$request->input('fname');
        $res-> lname = $request->input('lname');
        $res-> phone_number = $request->input('phone_number');
        $res-> age = $request->input('age');
        $res-> gender = $request->input('gender');
        $res-> description = $request->input('description');
        $res-> email = $request->input('email');
        $res-> address = $request->input('address');
        $res-> created_at = $request->input('created_at');
        $res-> updated_at = $request->input('updated_at');
        $res-> save();

     $request->session()->flash('msg','Data Submitted');
     return redirect('patient_show'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(patient $patient, $id)
    {
        patient::destroy(array('id', $id));
        return redirect('patient_show'); 
    }
}
