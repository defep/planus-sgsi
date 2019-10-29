<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecurityPlan;

class SecurityPlanController extends Controller
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
        $data["security_plans"] = SecurityPlan::get();
        return view("security_plan.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("security_plan.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'description' => '',
            'from' => '',
            'to' => ''
        ]);
        $security_plan = SecurityPlan::create($validatedData);

        return redirect('/security-plans')->with('success', 'El plan fue guardado');
    }
}
