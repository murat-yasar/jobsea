<x-layout >
   <x-slot name="title">Create Job</x-slot>
   <h2>Create a new job</h2>
   <form action="/jobs" method="POST">
      @csrf
      <input type="text" name="title" placeholder="title"><br>
      <input type="text" name="description" placeholder="description"><br>
      <br>
      <button type="submit">Submit</button>
   </form>
</x-layout >