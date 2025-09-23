<x-layout >
   <x-slot name="title">Create Job</x-slot>
   <h2>Create a new job</h2>
   <form action="/jobs" method="POST" class="my-2">
      @csrf
      <div class="mt-2">
         <input type="text" name="title" placeholder="title" value="{{ old('title') }}" class="p-2 bg-white">
         @error('title')
            <div class="mb-2 text-sm text-red-500">{{ $message }}</div>
         @enderror
      </div>
      <div class="my-2">
         <input type="text" name="description" placeholder="description" value="{{ old('description') }}" class="p-2 bg-white">
         @error('description')
            <div class="mb-2 text-sm text-red-500">{{ $message }}</div>
         @enderror
      </div>
      <button type="submit" class="p-2 rounded-md bg-blue-500 text-white">Submit</button>
   </form>
</x-layout >