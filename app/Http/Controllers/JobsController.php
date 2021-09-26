<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->get();
        return view('jobs.index')->with(compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function edit(Job $job)
    {
        return view('jobs.create')->with(compact('job'));
    }
}
