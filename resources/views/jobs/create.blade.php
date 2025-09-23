<x-layout >
   <x-slot name="title">Create Job</x-slot>
   <h2>Create a new job</h2>
   <form action="/jobs" method="POST" class="my-2">
      @csrf
      <input type="text" name="title" placeholder="title" class="p-2 bg-white">
      <input type="text" name="description" placeholder="description" class="p-2 bg-white">
      <button type="submit" class="p-2 rounded-md bg-blue-500 text-white">Submit</button>
   </form>
</x-layout >