<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $jobs = Job::latest()->limit(6)->get();

        return view('pages.index')->with('jobs', $jobs);
    }
}
