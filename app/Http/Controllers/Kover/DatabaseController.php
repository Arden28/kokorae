<?php

namespace App\Http\Controllers\Kover;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function index(){
        return view('kover.database.list');
    }
}
