<?php

namespace App\Http\Controllers;

use App\Threat;
use Illuminate\Http\Request;

class ThreatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["threats"] = Threat::get();
        return view("threat.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Threat  $threat
     * @return \Illuminate\Http\Response
     */
    public function show(Threat $threat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Threat  $threat
     * @return \Illuminate\Http\Response
     */
    public function edit(Threat $threat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Threat  $threat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Threat $threat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Threat  $threat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Threat $threat)
    {
        //
    }
}
