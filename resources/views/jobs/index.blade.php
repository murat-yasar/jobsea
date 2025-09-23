<x-layout >
   <x-slot name="title">Available Jobs</x-slot>
   <h2>Available Jobs</h2>

   <ul>
      @forelse ($jobs as $job)
      <li><a href="{{ route('jobs.show', $job->id) }}">{{ $job->title }}</a> - {{ $job->description }}</li>
      @empty
      <p>No jobs available!</p>
      @endforelse
   </ul>
</x-layout >