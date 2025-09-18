<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   @vite('resources/css/app.css')
   <title>{{ $title ?? 'JobSea | Catch your dream job' }}</title>
</head>
<body class="bg-gray-100">
   <x-header />
   <main class="container mx-auto p-4 mt-4">
    {{ $slot }}
   </main>
</body>
</html>