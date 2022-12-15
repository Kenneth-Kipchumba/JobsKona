<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CoreUI PRO for Bootstrap CSS -->
  <link href="{{ asset('assets/css/coreui.min.css') }}" rel="stylesheet" >

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/63b4fcb6d3.js" crossorigin="anonymous"></script>

  <title>{{ config('app.name') }}</title>

  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
  <link rel="stylesheet" href="{{ asset('assets/css/simplebar.css') }}">

  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/css/prism.css') }}">
  <link href="{{ asset('assets/css/example.css') }}" rel="stylesheet">
<script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-KX4JH47');
    </script>
<link href="{{ asset('assets/css/coreui-chartjs.css') }}" rel="stylesheet">
</head>


<body>
  @include('backend.partials.sidebar')

<div class="wrapper d-flex flex-column min-vh-100 bg-light">

  @include('backend.partials.header')

  <!-- Including Sweet Alert 2 -->
  @include('sweetalert::alert')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    @yield('content')
  </div>
</div>

  @include('backend.partials.footer')

</div>

<!-- CoreUI PRO for Bootstrap Bundle with Popper -->
<script src="{{ asset('assets/js/coreui.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/simplebar.min.js') }}"></script>

<script src="{{ asset('assets/js/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/coreui-chartjs.js') }}"></script>
<script src="{{ asset('assets/js/coreui-utils.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    </script>
</body>
</html>