<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI PRO for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.3.2/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-EeY9vKy5BpcvZvhMsXk8ZQ8iQPdGN/592RjtQrlRTa8fxPZovarAd02WR1WFFk+/" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/63b4fcb6d3.js" crossorigin="anonymous"></script>

    <title>{{ config('app.name') }}</title>
  </head>
  <body>

    @include('backend.partials.header')

    @include('backend.partials.sidebar')
    
    

    




    @include('backend.partials.footer')

    <!-- CoreUI PRO for Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.3.2/dist/js/coreui.bundle.min.js" integrity="sha384-AekAC2S7WX3JY6Z9cKOFyCsxgzI1Dq3i5zx2j7WhH3DdYA7/qHSzs4j90SCj9DJV" crossorigin="anonymous"></script>
  </body>
</html>
