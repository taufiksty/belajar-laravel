<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Satya's Blog | Dashboard</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>

  @include('dashboard.layouts.header')

  <div class="container-fluid">
    <div class="row">
      @include('dashboard.layouts.sidebar')

      @yield('container')
    </div>
  </div>

  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="/js/dashboard.js"></script>
</body>
</html>

