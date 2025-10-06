<x-layout>
   <x-slot name="title">Edit Job Definition</x-slot>
   <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
      <h2 class="text-4xl text-center font-bold mb-4">Edit Job Definition</h2>

      <form method="POST" action="{{ route('jobs.update', $job->id) }}" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">Job Info</h2>

         <x-inputs.text id="title" name="title" label="Job Title" placeholder="Software Engineer" :value="old('title', $job->title)" />

         <x-inputs.text-area id="description" name="description" label="Job Description" placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..." :value="old('description', $job->description)" />

         <x-inputs.text id="salary" type="number" name="salary" label="Gross Annual Salary (EUR)" placeholder="60000" :value="old('salary', $job->salary)" />

         <x-inputs.text-area id="requirements" name="requirements" label="Requirements" placeholder="Bachelor's degree in Computer Science or relevant experience" :value="old('requirements', $job->requirements)" />

         <x-inputs.text-area id="benefits" name="benefits" label="Benefits" placeholder="Private Health Insurance, 30 days vacation, Fitness, Bike-Leasing, etc." :value="old('benefits', $job->benefits)" />

         <x-inputs.text id="tags" name="tags" label="Tags (comma-separated)" placeholder="development, coding, java, python" :value="old('tags', $job->tags)" />

         <x-select id="job_type" name="job_type" label="Job Type" :value="old('job_type', $job->job_type)"
         :options="['Full-Time'=>'Full-Time', 'Part-Time'=>'Part-Time', 'Contract'=>'Contract', 'Temporary'=>'Temporary', 'Internship'=>'Internship', 'Volunteer'=>'Volunteer', 'On-Call'=>'On-Call']" />

         <x-select id="remote" name="remote" label="Remote" :value="old('remote', $job->remote)" :options="[0 => 'No', 1 => 'Yes']" />

         <x-inputs.text id="address" name="address" label="Address" placeholder="Müsterstr. 1" :value="old('address', $job->address)" />

         <x-inputs.text id="city" name="city" label="City" placeholder="Düsseldorf" :value="old('city', $job->city)" />

         <x-inputs.text id="state" name="state" label="State" placeholder="NRW" :value="old('state', $job->state)" />

         <x-inputs.text id="zipcode" name="zipcode" label="ZIP Code" placeholder="40500" :value="old('zipcode', $job->zipcode)" />

         <h2 class="text-2xl font-bold my-6 text-center text-gray-500">Company Info</h2>

         <x-inputs.text id="company_name" name="company_name" label="Company Name" placeholder="Enter Company name" :value="old('company_name', $job->company_name)" />

         <x-inputs.text-area id="company_description" name="company_description" label="Company Description" placeholder="Enter Company Description" :value="old('company_description', $job->company_description)" />

         <x-inputs.text id="company_website" type="url" name="company_website" label="Company Website" placeholder="Enter website url" :value="old('company_website', $job->company_website)" />

         <x-inputs.text id="contact_phone" name="contact_phone" label="Contact Phone" placeholder="Enter phone number" :value="old('contact_phone', $job->contact_phone)" />

         <x-inputs.text id="contact_email" type="email" name="contact_email" label="Contact Email" placeholder="Email where you want to receive the applications" :value="old('contact_email', $job->contact_email)" />

         <x-inputs.file id="company_logo" type="file" name="company_logo" label="Company Logo" :value="old('company_logo', $job->company_logo)" />

         <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">Save</button>
      </form>
   </div>
</x-layout>