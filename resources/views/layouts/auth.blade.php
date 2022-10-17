<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Jobs Portal">
    <meta name="author" content="Kenneth Kipchumba">
    <meta name="keyword" content="Online Job Portal,Job Application,Employer,Job Seekers,Recruitment,Recruiters,Jobs,Skills">
    <!-- CoreUI -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/63b4fcb6d3.js" crossorigin="anonymous"></script>

    <title>
      {{ config('app.name', 'Jobs') }}
    </title>

    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="node_modules/simplebar/dist/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="css/examples.css" rel="stylesheet">
  </head>
  <body>
    
    <!-- Yield The Page Body Here -->
    @yield('content')

    <!-- CoreUI and necessary plugins-->
    <!--<script src="node_modules/@coreui/coreui-pro/dist/js/coreui.bundle.min.js"></script>
    <script src="node_modules/simplebar/dist/simplebar.min.js"></script>-->

    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.3.2/dist/js/coreui.bundle.min.js" integrity="sha384-AekAC2S7WX3JY6Z9cKOFyCsxgzI1Dq3i5zx2j7WhH3DdYA7/qHSzs4j90SCj9DJV" crossorigin="anonymous"></script>

    <script>
      if (document.body.classList.contains('dark-theme')) {
        var element =  document.getElementById('btn-dark-theme');
        if (typeof(element) != 'undefined' && element != null) {
          document.getElementById('btn-dark-theme').checked = true;
        }
      } else {
        var element =  document.getElementById('btn-light-theme');
        if (typeof(element) != 'undefined' && element != null) {
          document.getElementById('btn-light-theme').checked = true;
        }
      }
      function handleThemeChange(src) {
        var event = document.createEvent('Event');
        event.initEvent('themeChange', true, true);
      
        if (src.value === 'light' ) {
          document.body.classList.remove('dark-theme');
        }
        if (src.value === 'dark' ) {
          document.body.classList.add('dark-theme');
        }
        document.body.dispatchEvent(event);
      }
      
    </script>
    <script> 
    </script>
  </body>
</html>