<?php

namespace App\Http\Controllers;

use App\apointment;
use Illuminate\Http\Request;

class ApointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_apoint');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new apointment;
        $res->name = $request->input('name');
        $res-> age = $request->input('age');
        $res-> ssd = $request->input('ssd');
        $res-> problem = $request->input('problem');
        $res-> save();

     $request->session()->flash('msg','Data Submitted');
     return redirect('apointment'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function show(apointment $apointment)
    {
        return view('apoint_show')->with('pointarr', apointment::all());   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function edit(apointment $apointment, $id)
    {
        return view('apoint_update')->with('pointarr', apointment::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, apointment $apointment)
    {
        $res = apointment::find($request->id);
        $res-> name = $request->input('name');
        $res-> age = $request->input('age');
        $res-> ssd = $request->input('ssd');
        $res-> problem = $request->input('problem');
        $res-> save();

     $request->session()->flash('msg','Data Submitted');
     return redirect('apointment'); 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(apointment $apointment, $id)
    {
        apointment::destroy(array('id', $id));
        return redirect('apointment');
    }
}
