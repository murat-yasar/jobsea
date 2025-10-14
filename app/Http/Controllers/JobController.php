<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class JobController extends Controller
{
    use AuthorizesRequests;

    // @desc Show all job listings
    // @route GET /jobs
    public function index(): View
    {
        $jobs = Job::latest()->paginate(6);
        return view('jobs.index')->with('jobs', $jobs);
    }

    // @desc Show create job form
    // @route GET /jobs/create
    public function create(): View
    {
        return view('jobs.create');
    }

    // @desc Save job to database
    // @route POST /jobs
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|integer',
            'requirements' => 'nullable|string',
            'benefits' => 'nullable|string',
            'tags' => 'nullable|string',
            'job_type' => 'required|string',
            'remote' => 'required|boolean',
            'address' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'nullable|string',
            'company_name' => 'required|string',
            'company_description' => 'nullable|string',
            'company_website' => 'nullable|url',
            'contact_phone' => 'nullable|string',
            'contact_email' => 'required|string',
            'company_logo' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        // Hardcoded user ID
        $validatedData['user_id'] = auth()->user()->id;

        // Check for image
        if($request->hasFile('company_logo')){
            // Store the file and get the path
            $path = $request->file('company_logo')->store('logos', 'public');

            // Add path to the validated data
            $validatedData['company_logo'] = $path;
        }

        // Submit to DB
        Job::create($validatedData);

        return redirect()->route('jobs.index')->with('success', 'Job listing has been created successfully!');
    }

    // @desc Display a single job listing
    // @route GET /jobs/{$id}
    public function show(Job $job): View
    {
        return view('jobs.show')->with('job', $job);
    }

    // @desc Show edit job form
    // @route GET /jobs/{$id}/edit
    public function edit(Job $job): View
    {
        // Check if user is authorized
        $this->authorize('update', $job);

        return view('jobs.edit')->with('job', $job);
    }

    // @desc Update job listing
    // @route PUT /jobs/{$id}
    public function update(Request $request, Job $job): RedirectResponse
    {
        // Check if user is authorized
        $this->authorize('update', $job);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|integer',
            'requirements' => 'nullable|string',
            'benefits' => 'nullable|string',
            'tags' => 'nullable|string',
            'job_type' => 'required|string',
            'remote' => 'required|boolean',
            'address' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'nullable|string',
            'company_name' => 'required|string',
            'company_description' => 'nullable|string',
            'company_website' => 'nullable|url',
            'contact_phone' => 'nullable|string',
            'contact_email' => 'required|string',
            'company_logo' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        // Delete the old image
        Storage::delete('public/storage/logos/'.basename($job->company_logo));

        // Check for image
        if($request->hasFile('company_logo')){
            // Store the file and get the path
            $path = $request->file('company_logo')->store('logos', 'public');

            // Add path to the validated data
            $validatedData['company_logo'] = $path;
        }

        // Submit to DB
        $job->update($validatedData);

        return redirect()->route('jobs.index')->with('success', 'Job listing has been updated successfully!');
    }

    // @desc Delete a job listing
    // @route DELETE /jobs/{$id}
    public function destroy(Job $job): RedirectResponse
    {
        // Check if user is authorized
        $this->authorize('delete', $job);

        // If there is a logo, then destroy it
        if($job->company_logo){
            Storage::delete('public/logos/' . $job->company_logo);
        }

        $job->delete();

        // Check if the request comes from the dashboard
        if (request()->query('from') === 'dashboard') {
            return redirect()->route('dashboard')->with('success', 'Job listing deleted successfully!');
        }

        return redirect()->route('jobs.index')->with('success', 'Job listing has been deleted successfully!');
    }
}
