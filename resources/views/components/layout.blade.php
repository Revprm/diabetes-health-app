<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Diabetes Health App</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
    </div>
    <main>
        {{ $slot }}
  </main>
</body>
</html>