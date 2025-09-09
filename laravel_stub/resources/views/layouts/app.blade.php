<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Endless Runner</title>
  @stack('head')
  <style>
    body { min-height: 100vh; }
  </style>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>
    // Simple helper to POST forms from buttons
    function post(path, params) {
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = path;
      const token = document.createElement('input');
      token.type = 'hidden'; token.name = '_token'; token.value = document.querySelector('meta[name="csrf-token"]').content;
      form.appendChild(token);
      for (const key in params) {
        const input = document.createElement('input');
        input.type = 'hidden'; input.name = key; input.value = params[key];
        form.appendChild(input);
      }
      document.body.appendChild(form); form.submit();
    }
  </script>
  <style>
    .bg-image { background-size: cover; background-position: center; }
  </style>
  @stack('styles')
</head>
<body>
  @include('partials.navbar')
  <main>
    @yield('content')
  </main>
</body>
</html>

