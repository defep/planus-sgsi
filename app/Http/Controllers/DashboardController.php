<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecurityPlan;

class DashboardController extends Controller
{
    public function index()
    {
        $data["plans"] = SecurityPlan::whereDate('from','<=', date('Y-m-d'))
        ->whereDate('to','>=', date('Y-m-d'))
        ->orderBy('id','desc')->get();
        return view('dashboard', $data);
    }
}
