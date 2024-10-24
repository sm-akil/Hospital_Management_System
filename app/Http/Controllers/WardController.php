<?php

namespace App\Http\Controllers;

use App\ward;
use Illuminate\Http\Request;

class WardController extends Controller
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
        return view('ward_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new ward;
        $res->ward_name=$request->input('ward_name');
        $res-> no_bed = $request->input('no_bed');
        $res-> save();

     $request->session()->flash('msg','Data Submitted');
     return redirect('ward_show'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show(ward $ward)
    {
        return view('ward_show')->with('ward_arr', ward::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit(ward $ward, $id)
    {
        return view('ward_update')->with('ward_arr', ward::find($id));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ward $ward)
    {
        $res = ward::find($request->id);
        $res->ward_name=$request->input('ward_name');
        $res-> no_bed = $request->input('no_bed');
        $res-> save();

        $request->session()->flash('msg','Data updated');
        return redirect('ward_show'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(ward $ward, $id)
    {
        ward::destroy(array('id', $id));
        return redirect('ward_show'); 
    }
}
