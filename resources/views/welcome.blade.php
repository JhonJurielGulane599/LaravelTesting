<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ninja Network</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-center px-8 py-12">
  <h2>Welcome to the Ninja Network</h2>
  <p>Click the button below to view the list of ninjas.</p>
  
  <a href="/ninjas" class="btn mt-4 inline-block">
    Find Ninjas!
  </a>
</body>
</html>