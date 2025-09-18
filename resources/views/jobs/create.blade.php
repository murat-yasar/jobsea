<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create a new job</title>
</head>
<body>
   <h2>Create a new job</h2>
   <form action="/jobs" method="POST">
      @csrf
      <input type="text" name="title" placeholder="title"><br>
      <input type="text" name="description" placeholder="description"><br>
      <br>
      <button type="submit">Submit</button>
   </form>
</body>
</html>