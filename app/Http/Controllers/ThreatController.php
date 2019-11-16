<?php

namespace App\Http\Controllers;

use App\Threat;
use App\AssetType;
use Illuminate\Http\Request;

class ThreatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $data["asset_types"] = AssetType::all();
        return view("threat.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'description' => '',
        ]);
        $threat = Threat::create($validatedData);
        $threat->asset_types()->attach($request->asset_types);

        return redirect('/threats')->with('success', 'El activo fue guardado');
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
        $data["threat"] = $threat;
        return view("threat.edit", $data);
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => ''
        ]);
        Threat::whereId($threat->id)->update($validatedData);

        return redirect('/threats')->with('success', 'El threat fue actualizado');
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
