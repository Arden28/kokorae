<?php

namespace App\Http\Controllers;

use App\Models\KoverJob;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = KoverJob::all();
        return view('jobs.index', compact('jobs'));
    }
}
