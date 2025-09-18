<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $title = 'Available Jobs';
        $jobs = [
        'Project Manager',
        'Scrum Master',
        'UI/UX Designer',
        'Frontend Developer',
        'Backend Developer',
        'Database Admin',
        'DevOps Engineer',
        ];

        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create(){
        return view('jobs.create');
    }

    public function show(string $id): string {
        return "Job Id: $id";
    }

    public function save(Request $request): string {
        $title = $request->input('title');
        $description = $request->input('description');

        return "
            <h2>$title</h2>
            <p>$description</p>
        ";
    }
}
