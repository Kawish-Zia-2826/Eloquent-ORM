<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="container mt-4">
      <h2 class="text-center mb-4">@yield('heading')</h2>
      <div class="row">
        <div class="col-8">
          @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            
          @endif
        </div>

      </div>
      @yield('content')


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
