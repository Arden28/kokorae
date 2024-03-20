<?php

namespace App\Http\Controllers\Kover;

use App\Http\Controllers\Controller;
use App\Models\KoverCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatabaseController extends Controller
{
    public function index(){

        $companies = KoverCompany::isKover(Auth::user()->id)->get();
        return view('kover.database.list', compact('companies'));
    }
}
