<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   @vite('resources/css/app.css')
   <title>{{ $title ?? 'JobSea | Catch your dream job' }}</title>
</head>
<body class="bg-gray-100">
   <x-header />
   @if (request()->is('/'))
   <x-hero-section/>
   @endif
   <main class="container mx-auto p-4 mt-4">
    {{ $slot }}
   </main>

   <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>