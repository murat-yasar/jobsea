<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{ $title }}</title>
</head>
<body>
   <h2>{{ $title }}</h2>
   <ul>
      @forelse ($jobs as $job)
      <li>{{ $job }}</li>
      @empty
      <p>No jobs available!</p>
      @endforelse
   </ul>
</body>
</html>