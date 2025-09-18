<x-layout >
   <x-slot name="title">Available Jobs</x-slot>
   <h2>{{ $title }}</h2>
   <ul>
      @forelse ($jobs as $job)
      <li>{{ $job }}</li>
      @empty
      <p>No jobs available!</p>
      @endforelse
   </ul>
</x-layout >